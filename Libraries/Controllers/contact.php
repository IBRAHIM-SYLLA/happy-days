<?php
require_once 'functions.php';

if(isset($_POST['contact'])){
    if(!empty($_POST["name"]) && !empty($_POST["last-name"]) && !empty($_POST["mail"]) && !empty($_POST["message"])){

        $name = security($_POST["name"]);
        $lastname = security($_POST["last-name"]);
        $mail = security($_POST["mail"]);
        $message = security($_POST["message"]);

        if (preg_match("/^[^@]+@[^@]+\.[a-z]{2,6}$/i", $mail)){
            sendMailContact($name, $mail,$lastname, $message);
        }
        else {
            echo "L'email n'est pas valide.";
        }
    }
    else {
        echo "Un des champs est vide.";
    }
}

?>