<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);
session_start();
require_once("controller/controller.php");
if (isset($_GET['action'])) 
{
    if ($_GET['action'] == 'adduser') 
    {
        if(!empty($_POST['username']) AND !empty($_POST['mail']) AND !empty($_POST['mdp']) AND !empty($_POST['confirm_mdp']))
        {
            if ($_POST['mdp'] == $_POST['confirm_mdp']) 
            {
                Add_user($_POST['username'],$_POST['mail'],$_POST['mdp']);
            }
        }
            
    }
    if ($_GET['action'] == 'login') 
    {
        if(!empty($_POST['username1']) AND !empty($_POST['mdp1']))
        {           
            $firy = verify_mdp($_POST['username1'],$_POST['mdp1']);

            if($firy == 1)
            {
                $info = create_session($_POST['username1'],$_POST['mdp1']);
                $userinfo = $info->fetch();

                $_SESSION['id'] = $userinfo['id'];
                $_SESSION['username'] = $userinfo['username'];
                $_SESSION['mail'] = $userinfo['mail'];
                affiche();

            }
            else
            {
                require('view/acc.php');
            }
        }

            
    }
    if ($_GET['action'] == 'amis') 
    {
        check1();
        post_amis();         
    }
    if ($_GET['action'] == 'message') 
    {
        check1();
        post_message();         
    }
    if ($_GET['action'] == 'ajout_amis') 
    {
        check1();
        post_ajout_amis();         
    }

    if ($_GET['action'] == 'ajouter') 
    {
        ajout_amis($_SESSION['id'],$_GET['id4']);
    }

    if ($_GET['action'] == 'mess') 
    {  
        post_diss($_GET['id']);   
    }
    if ($_GET['action'] == 'go') 
    {
        $message = $_POST['message1'];
        post_envoi_message($message,$_SESSION['id'],$_SESSION['id_user2']); 
    }

    if ($_GET['action'] == 'affice') 
    {
        user($_GET['id3']);
        edit_mes($_GET['id3'],$_SESSION['id'],$_GET['id2']);
        post_ecrire($_GET['id2']);
    }

    if ($_GET['action'] == 'deconnect') 
    {
        deconnecter();
    }
}
else
{
    posthome();
}