<?php
require_once '../Models/User.php';
require_once 'functions.php';
$user = new User();
$error = "";
if (isset($_POST['register'])){
    // je vérifie si les champs sont vide
    if (!empty($_POST['civility']) && !empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['password']) &&
        !empty($_POST['password_conf']) && !empty($_POST['adress']) && !empty($_POST['zip_code']) && !empty($_POST['city']) && !empty($_POST['phone_number'])){

        // je sécurise les champs a l'aide de la fonction security
        $civility = security($_POST['civility']);
        $firstname = security($_POST['firstname']);
        $lastname = security($_POST['lastname']);
        $email = security($_POST['email']);
        $password = security($_POST['password']);
        $password_conf = security($_POST['password_conf']);
        $adress = security($_POST['adress']);
        $zip_code = security($_POST['zip_code']);
        $city = security($_POST['city']);
        $phone_number = security($_POST['phone_number']);
        $regularExpemail = "/^[^@]+@[^@]+\.[a-z]{2,6}$/i";
        $regularExpnumber = '/^[0-9]{10}+$/';
        // je compare le contenu des champs avec les expressions regulière a l'aide de la fontion preg_match()
        if (preg_match( $regularExpemail, $email) && preg_match($regularExpnumber, $phone_number)){

            // je vérifie si l'email et déja présent en Bdd
            $verify = $user->verify_and_connect($email);
            //  je vérifie que le mot de passe et la confirmation sont identique
            if ($password == $password_conf){
                $password = password_hash($password, PASSWORD_BCRYPT);
                if(count($verify) == 0){
                    // j'enregistre en base de données
                    $user->register($civility, $firstname, $lastname, $email, $password, $adress, $zip_code, $city, $phone_number);
                    sendMail($email, $lastname);
                    header('Location: ../../index.php');
                }
                else{
                    // si un l'user existe déja
                    $error = 'utilisateur déja existant';
                }
            }
            else{
                // si le mot de passe et la confirmation ne sont pas identique
                $error = 'les mots de passes ne sont pas identique';
            }
        }
        else{
            // si le contenu des champs ne correspondes pas a l'expressions
            $error = 'Email ou numéros de téléphone invalide';
        }
    }
    else{
        // si un ou des champs sont vide
        $error = "champ vide";
    }
        // var_dump($_POST);
    }

?>