<?php
require_once '../Models/User.php';
require_once 'functions.php';

if (isset($_POST['connect'])){

    if (!empty($_POST['email']) && !empty($_POST['password'])){

        $email = security($_POST['email']);
        $password = security($_POST['password']);

        if (preg_match("/^[^@]+@[^@]+\.[a-z]{2,6}$/i", $email)){
            $user = new User();
            $verify = $user->verify_and_connect($email);

            if(count($verify) > 0){
                if (password_verify($password, $verify[0]['password'])){
                    session_start();
                    $_SESSION['utilisateurs'] = $verify;
                    header('Location: ../../index.php');
                }
            }
            else{
                echo 'user inconnu';
            }
        }
        else{
            echo 'email invalide';
        }
    }
    else {
        echo 'champ vide';
    }
}
?>