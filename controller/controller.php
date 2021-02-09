<?php
require_once('model/model.php');

function log_in($id)
{
    header('Location: view/acc1.php?id='.$id);
}
function posthome()
{
    require('view/acc.php');
}

function post_amis()
{
    $add = new Query_bdd();
    $req = $add->table1($_SESSION['id']);
    require('view/amis.php');
}



function post_message()
{
    $add = new Query_bdd();
    $req = $add->get_mess($_SESSION['id']);

    require('view/message.php');
}

function post_ajout_amis()
{
    $add = new Query_bdd();
    $req = $add->table1($_SESSION['id']);
    require('view/ajt_amis.php');
}

function Add_user($username,$mail,$mdp)
{
    $add = new Query_bdd();
    $add->adduser($username,$mail,$mdp);
    posthome();
}

function verify_mdp($username,$mdp)
{
    $add = new Query_bdd();
    $verify = $add->verify_user_mdp($username,$mdp);
    $firy = $verify -> rowCount();
    return $firy;
}

function create_session($username,$mdp)
{
    $add = new Query_bdd();
    $verify = $add->verify_user_mdp($username,$mdp);
    $firy = $verify -> rowCount();
    if($firy == 1)
    {
        return $verify;
    }
    else{
        return 0;
    }
}

function check1()
{
    $add = new Query_bdd();
    $mesagy = $add->check_new_mes($_SESSION['id']);
    $mesagy = $mesagy->fetch();
    $_SESSION['nb_mes'] = $mesagy['nbe_mes'];
}

function affiche(){
    $add = new Query_bdd();
    $donne = $add->getinfo();
    $donne = $donne->fetchAll();
    $_SESSION["done"] = $donne;
    check1();
    header('Location: view/acc1.php');
    
}

function post_envoi_message($content,$id_user1,$id_user2)
{
    $add = new Query_bdd();
    $id_diss = "";
    $datetime = date("Y-m-d H:i:s");
    if($id_user1<$id_user2)
    {
        $id_diss = $id_user1.'_'.$id_user2;
    }
    else
    {
        $id_diss = $id_user2.'_'.$id_user1;
    }
    

    $verification = $add->get_mess2($id_user1,$id_user2);
    $verification = $verification -> rowCount();
    if($verification != 1 )
    {
        $disc1 = $add->disc1($id_diss,$id_user1,$id_user2);
    }

    $getid_disc = $add->getid_users($id_diss);
    $getid_disc = $getid_disc->fetch();
    $id_diss = $getid_disc['id'];

    $envoi = $add->mes1($content,$id_user1,$id_diss,$datetime);
    $updati = $add->getid_updati($datetime);
    $updati = $updati->fetch();
    $id_mes = $updati['id'];
    
    $verif = 1;
    $fin1 =  $add->update_disc1($id_user1,$id_user2,$id_mes,$verif,$id_diss);
    $nb = $add->new_mes($id_diss);
    $nbe = $nb->rowCount();
    if($nbe != 1 )
    {
        $fin2 = $add->nouveau($id_user2,$id_diss,$verif);
    }
    else
    {
        $nb = $nb->fetch();
        $verif = $nb['nb_mes'] + 1;
        $fin2 = $add->update_new_mes($verif,$id_diss);
    }
    post_ecrire($id_diss,$id_diss);
}



function post_ecrire($id_disc)
{
    $add = new Query_bdd();
    $req = $add->ecrire($id_disc);
    check1();
    require('view/affic_mes.php');
}   

function edit_mes($id_recepteur,$id,$id_disc)
{
    $add = new Query_bdd();
    $check = $add->check_new_mes1($_SESSION['id'],$id_disc);
    $check1 = $check->rowCount();
    if($check1 == 1)
    {
        $fin3 = $add->set_vue($id_recepteur,$id,$id_disc);
    }
}

function user($id_user2)
{
    $add = new Query_bdd();
    $user4 = $add->table($id_user2);
    $user4 = $user4->fetch();
    $_SESSION["id_user2"] = $user4['id'];
    $_SESSION['username_user2'] = $user4['username'];
}


function deconnecter()
{
    $_SESSION = array();
    session_destroy();
    posthome();

}

function compter()
{
    $add = new Query_bdd();
    $firy = $add->new_mes();
    return $firy;
}

function ajout_amis($id_user1,$id_user2)
{
    $add = new Query_bdd();
    //$ajoutamis = $add->ajoutamis($id_user1,$id_user2);
    post_ajout_amis();
}