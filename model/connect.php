<?php
class Connect_bdd{
    protected function dbconnect(){
        $bdd = new PDO('mysql:host=localhost;dbname=ptt_chat','offman','offman') or die('not connect');
        return $bdd;
    }
}
