<?php
require_once 'Model.php';

class User extends Model {

    private $id;
    public $firstname;
    public $lastname;
    public $email;
    public $password;
    public $password_conf;
    public $adress;
    public $zip_code;
    public $city;
    public $id_right;
    public $phone_number;


    public function register($civility, $firstname, $lastname, $email, $password, $adress, $zip_code, $city, $phone_number) {

        $sql = $this->bdd->prepare("INSERT INTO `users`(`civility`,`firstname`, `lastname`, `email`, `password`, `adress`, `zip_code`, `city`, `id_right`, `phone_number`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, 1, ?)");
        $sql->execute(array($civility, $firstname, $lastname, $email, $password, $adress, $zip_code, $city, $phone_number));
    }

    public function check_if_already_exists($email){

        $sql = $this->bdd->prepare("SELECT * FROM users WHERE email = ?");
        $sql->execute(array($email));
        $fetch_email = $sql->fetchAll();
        return $fetch_email;
    }

    public function connect($email, $password){

    }
}


?>