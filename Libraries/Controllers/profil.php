<?php
session_start();
require_once '../Models/User.php';
require_once 'functions.php';


$user = new User();
$dataUser = $user->verify_and_connect($_SESSION['utilisateurs'][0]['email']);

if (isset($_POST['update'])){
    if (!empty($_POST['email']) && !empty($_POST['adress']) && !empty($_POST['zip_code']) && !empty($_POST['city']) && !empty($_POST['phone_number'])){

        $email = security($_POST['email']);
        $password = security($_POST['password']);
        $password_conf = security($_POST['password_conf']);
        $adress = security($_POST['adress']);
        $zip_code = security($_POST['zip_code']);
        $city = security($_POST['city']);
        $phone_number = security($_POST['phone_number']);

        $id = $_SESSION['utilisateurs'][0]['id'];
        if (preg_match("/^[^@]+@[^@]+\.[a-z]{2,6}$/i", $email) && preg_match('/^[0-9]{10}+$/', $phone_number)){

            if ($password == $password_conf){
                $password = password_hash($password, PASSWORD_BCRYPT);
                $user->update_user($email, $password, $adress, $zip_code, $city, $phone_number, $id);
                header('Refresh: 0');
            }
            else{
                echo "les mot de passe ne sont pas identique";
            }
        }
        else{
            echo "numéros de téléphone ou email invalide";
        }
    }
    else{
        echo "champs vide";
    }
}
?>