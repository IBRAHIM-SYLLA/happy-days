<?php

abstract class Model{

    public function __construct(){
        $bdd = new \PDO("mysql:host=localhost;dbname=happydays;charset=utf8",'root','');
        $bdd->setAttribute(\PDO::ATTR_ERRMODE , \PDO::ERRMODE_EXCEPTION);
        $this->bdd = $bdd;
        return $bdd;
    }
}
?>