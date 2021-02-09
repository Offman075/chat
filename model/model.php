<?php

require_once("connect.php");

class Query_bdd extends Connect_bdd
{
    public function adduser($username,$mail,$mdp)
    {
        $bdd = $this->dbconnect();
        $insertion = $bdd->prepare("INSERT INTO espace_membre(username,mail,mdp) 
                                        VALUES(?,?,?)");
        $insertion->execute(array($username,$mail,$mdp));
        return $insertion;
    }	
    public function verify_user_mdp($nom,$mdp)
    {
        $bdd = $this->dbconnect();
        $verify = $bdd->prepare("SELECT * FROM espace_membre WHERE username=? AND mdp=? ");
        $verify->execute(array($nom,$mdp));
        return $verify;
    } 
    function getinfo()
    {
        $bdd = $this->dbconnect();
        $req = $bdd->query('SELECT * FROM espace_membre');   
        return $req; 
    }


    public function table($id)
    {
        $bdd = $this->dbconnect();
        $verify = $bdd->prepare("SELECT * FROM espace_membre WHERE id=? ");
        $verify->execute(array($id));  
        return $verify;
    }

    public function table1($id)
    {
        $bdd = $this->dbconnect();
        $verify = $bdd->prepare("SELECT * FROM espace_membre WHERE id!=? ");
        $verify->execute(array($id));  
        return $verify;
    }


/*
    public function list_disc()
    {
        $bdd = $this->dbconnect();
        $req = $bdd->query("SELECT D.id as id_disc,D.id_user2,D.date,E.id,E.username as users,M.id,M.contenue as messagy,M.id_users FROM discussion D, espace_membre E, message1 M WHERE D.id_user2=E.id AND D.id=M.id_users GROUP BY E.username ORDER BY D.date DESC, M.id DESC LIMIT 0, 16"); 
        return $req;
    }

    function chat($id_user1,$id_user2,$content,$id_mess)
    {
        $bdd = $this->dbconnect();
        $req = $bdd->prepare('INSERT INTO message2 (id_user1,id_user2,content,id_mess) VALUES(?,?,?,?)');
        $req->execute(array($id_user1,$id_user2,$content,$id_mess));
        return $req; 
    }

    public function list()
    {
        $bdd = $this->dbconnect();
        $req = $bdd->query("SELECT M.content as messagy,E.username as users FROM message2 M INNER JOIN espace_membre E ON M.id_user2=E.id ORDER BY M.dati DESC"); 
        return $req;
    }
*/
    function disc1($id_users,$id_user1,$id_user2)
    {
        $id_last_mes = 0;
        $verif = 0;
        $bdd = $this->dbconnect();
        $req = $bdd->prepare('INSERT INTO disc1 (id_users,id_user1,id_user2,id_last_mes,verif) VALUES(?,?,?,?,?)');
        $req->execute(array($id_users,$id_user1,$id_user2,$id_last_mes,$verif));
        return $req; 
    }


    function getid_users($id)
    {
        $bdd = $this->dbconnect();
        $req = $bdd->prepare("SELECT id FROM disc1 WHERE id_users LIKE ? " );   
        $req->execute(array($id));
        return $req; 
    }

    function verification_disc($id)
    {
        $bdd = $this->dbconnect();
        $req = $bdd->prepare("SELECT * FROM disc1 WHERE id_users LIKE ? " );   
        $req->execute(array($id));
        return $req; 
    }

    function mes1($content,$id_user1,$id_desc,$dati)
    {
        $bdd = $this->dbconnect();
        $req = $bdd->prepare('INSERT INTO mes1 (content,id_user1,id_disc,dati) VALUES(?,?,?,?)');
        $req->execute(array($content,$id_user1,$id_desc,$dati));
        return $req; 
    }

    function get_mess($id_user1)
    {
        $bdd = $this->dbconnect();
        $req = $bdd->prepare("SELECT * FROM disc1 WHERE id_user1=? OR id_user2=? ORDER BY id_last_mes DESC" );   
        $req->execute(array($id_user1,$id_user1));
        return $req; 
    }

    function update_disc1($id_user1,$id_user2,$id_last_mes,$verif,$id_disc)
    {
        $bdd = $this->dbconnect();
        $req = $bdd->prepare('UPDATE disc1 SET id_user1=?,id_user2=?,id_last_mes=?,verif=? WHERE id=?');
        $req->execute(array($id_user1,$id_user2,$id_last_mes,$verif,$id_disc));
        return $req; 
    }

    function update_verif($id_disc)
    {
        $verif =0;
        $bdd = $this->dbconnect();
        $req = $bdd->prepare('UPDATE disc1 SET verif=? WHERE id=?');
        $req->execute(array($verif,$id_disc));
        return $req; 
    }

    function getid_updati($id)
    {
        $bdd = $this->dbconnect();
        $req = $bdd->prepare("SELECT id FROM mes1 WHERE dati LIKE ? " );   
        $req->execute(array($id));
        return $req; 
    }

    function list_mes($id)
    {
        $bdd = $this->dbconnect();
        $req = $bdd->prepare("SELECT * FROM mes1 WHERE id=? " );   
        $req->execute(array($id));
        return $req; 
    }

    function ecrire($id_disc)
    {
        $bdd = $this->dbconnect();
        $req = $bdd->prepare("SELECT * FROM mes1 WHERE id_disc=? ORDER BY dati" );   
        $req->execute(array($id_disc));
        return $req;         
    }

    function get_mess2($id_user1,$id_user2)
    {
        $bdd = $this->dbconnect();
        $req = $bdd->prepare("SELECT * FROM disc1 WHERE ( id_user1=? AND id_user2=? )  OR ( id_user1=? AND id_user2=? )" );   
        $req->execute(array($id_user1,$id_user2,$id_user2,$id_user1));
        return $req; 
    }

    function new_mes($id_disc)
    {
        $bdd = $this->dbconnect();
        $somme = $bdd->prepare("SELECT * FROM new_mes WHERE id_disc=?" );
        $somme->execute(array($id_disc));
        return $somme; 
    }

    function check_new_mes($id)
    {
        $bdd = $this->dbconnect();
        $somme = $bdd->prepare("SELECT sum(nb_mes) as nbe_mes FROM new_mes WHERE id_recepteur=?" );
        $somme->execute(array($id));
        return $somme; 
    }

    function check_new_mes1($id_recepteur,$id_disc)
    {
        $bdd = $this->dbconnect();
        $somme = $bdd->prepare("SELECT * FROM new_mes WHERE id_recepteur=? AND id_disc=?" );
        $somme->execute(array($id_recepteur,$id_disc));
        return $somme; 
    }

    function nouveau($id_recepteur,$id_disc,$nb)
    {
        $bdd = $this->dbconnect();
        $req = $bdd->prepare('INSERT INTO new_mes (id_recepteur,id_disc,nb_mes) VALUES(?,?,?)');
        $req->execute(array($id_recepteur,$id_disc,$nb));
        return $req; 
    }

    function update_new_mes($nb_mes,$id_disc)
    {
        $bdd = $this->dbconnect();
        $req = $bdd->prepare('UPDATE new_mes SET nb_mes=? WHERE id_disc=?');
        $req->execute(array($nb_mes,$id_disc));
        return $req; 
    }

    function set_vue($id_recepteur,$id,$id_disc)
    {
        $nb_mes = 0;
        $bdd = $this->dbconnect();
        $req = $bdd->prepare('UPDATE new_mes SET id_recepteur=?,nb_mes=? WHERE id_recepteur=? AND id_disc=?');
        $req->execute(array($id_recepteur,$nb_mes,$id,$id_disc));
        return $req; 
    }

    function ajoutamis($id_user1,$id_user2)
    {
        $nb = 0;
        $bdd = $this->dbconnect();
        $req = $bdd->prepare('INSERT INTO amis (id_user1,id_user2,confrm) VALUES(?,?,?)');
        $req->execute(array($id_user1,$id_user2,$nb));
        return $req;
    }

    function check_amis()
    {
        $bdd = $this->dbconnect();
        $req = $bdd->prepare('SELECT id_user2 FROM amis');
        $req->execute(array());
        return $req;
    }
}