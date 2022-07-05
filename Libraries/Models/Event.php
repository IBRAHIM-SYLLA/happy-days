<?php
require_once 'Model.php';

class Event extends Model{

    private $id;
    public $name;
    public $dateEvent;
    public $description;
    public $image;


    public function registerEvent($name, $dateEvent, $description, $image){

        $sql = $this->bdd->prepare("INSERT INTO `event`( `name`, `date`, `description`, `image`) VALUES ( ?, ?, ?, ?)");
        $sql->execute(array($name, $dateEvent, $description, $image));

    }

    public function selectAllEvents(){

        $sql = $this->bdd->prepare("SELECT * FROM `event` ORDER BY DATE DESC");
        $sql->execute();
        $fetchAllEvents = $sql->fetchAll();
        return $fetchAllEvents;
    }

    public function updateEvent($name, $dateEvent, $description, $image){

        $sql = $this->bdd->prepare("UPDATE `event` SET `name`= ?,`date`= ?,`description`= ?,`image`= ? WHERE `id` = ?");
        $sql->execute(array($name, $dateEvent, $description, $image));
    }

    public function deleteEvent($idEvent){

        $sql = $this->bdd->prepare("DELETE FROM `event` WHERE `id` = ?");
        $sql->execute(array($idEvent));
    }
}