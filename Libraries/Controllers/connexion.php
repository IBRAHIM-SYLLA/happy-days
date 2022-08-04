<?php
require_once '../Models/User.php';
require_once 'functions.php';
$error = "";
if (isset($_POST['connect'])){

    if (!empty($_POST['email']) && !empty($_POST['password'])){

        $email = security($_POST['email']);
        $password = security($_POST['password']);
        $regularExpression = "/^[^@]+@[^@]+\.[a-z]{2,6}$/i";

        if (preg_match($regularExpression, $email)){
            $user = new User();
            $verify = $user->verify_and_connect($email);

            if(count($verify) > 0){
                if (password_verify($password, $verify[0]['password'])){
                    session_start();
                    $_SESSION['utilisateurs'] = $verify;
                    header('Location: ../../index.php');
                }
                else{
                    $error = "mot de passe incorrect";
                }
            }
            else{
                $error = 'user inconnu';
            }
        }
        else{
            $error = 'email invalide';
        }
    }
    else {
        $error = 'champ vide';
    }
}
?>