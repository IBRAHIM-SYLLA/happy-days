<?php

class Model{

    protected $table;


    public function __construct(){
        $bdd = new \PDO("mysql:host=localhost;dbname=happydays;charset=utf8",'root','');
        $bdd->setAttribute(\PDO::ATTR_ERRMODE , \PDO::ERRMODE_EXCEPTION);
        $this->bdd = $bdd;
        return $bdd;
    }

    public function selectAllWhereId($id){

        $sql = $this->bdd->prepare("SELECT * FROM {$this->table} WHERE `id` = ?");
        $sql->execute(array($id));
        $fetch = $sql->fetchAll();
        return $fetch;
    }

    public function delete($id){

        $sql = $this->bdd->prepare("DELETE FROM {$this->table} WHERE `id` = ?");
        $sql->execute(array($id));
    }

    public function selectAllData(){

        $sql = $this->bdd->prepare("SELECT * FROM {$this->table} ORDER BY `id` DESC");
        $sql->execute();
        $fetchAllEvents = $sql->fetchAll();
        return $fetchAllEvents;
    }
}
?>