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
}