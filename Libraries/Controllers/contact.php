<?php
require_once 'functions.php';

if(isset($_POST['contact'])){
    if(!empty($_POST["name"]) && !empty($_POST["last-name"]) && !empty($_POST["mail"]) && !empty($_POST["message"])){

        sendMailContact($_POST["name"], $_POST["mail"],$_POST["last-name"], $_POST["message"]);
    }
}

?>