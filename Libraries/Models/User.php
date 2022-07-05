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

        $sql = $this->bdd->prepare("INSERT INTO `users`(`civility`,`firstname`, `lastname`, `email`, `password`, `adress`, `zip_code`, `city`, `id_right`, `phone_number`, `member_state`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, 1, ?, 1)");
        $sql->execute(array($civility, $firstname, $lastname, $email, $password, $adress, $zip_code, $city, $phone_number));
    }

    public function verify_and_connect($email){

        $sql = $this->bdd->prepare("SELECT * FROM users WHERE email = ?");
        $sql->execute(array($email));
        $fetch_email = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $fetch_email;
    }

    public function selectAllUsers(){

        $sql = $this->bdd->prepare("SELECT * FROM users");
        $sql->execute();
        $fetch = $sql->fetchAll();
        return $fetch;
    }

    public function selectUser($idUser){

        $sql = $this->bdd->prepare("SELECT * FROM users WHERE `id` = ?");
        $sql->execute(array($idUser));
        $fetch = $sql->fetchAll();
        return $fetch;
    }

    public function update_user($email, $password, $adress, $zip_code, $city, $phone_number, $id){

        $sql = $this->bdd->prepare("UPDATE `users` SET `email`= ?,`password`= ?,`adress`= ?,`zip_code`= ?,`city`= ?,`phone_number`= ? WHERE `id`= ?");
        $sql->execute(array($email, $password, $adress, $zip_code, $city, $phone_number, $id));
    }

    public function delete_user($idUser){

        $sql = $this->bdd->prepare("DELETE FROM `users` WHERE id = ?");
        $sql->execute(array($idUser));
    }

}


?>