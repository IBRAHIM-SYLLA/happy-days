<?php
require_once '../Models/User.php';
require_once 'security.php';
$user = new User();

if (isset($_POST['register'])){
    if (!empty($_POST['civility']) && !empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['password']) &&
        !empty($_POST['password_conf']) && !empty($_POST['adress']) && !empty($_POST['zip_code']) && !empty($_POST['city']) && !empty($_POST['phone_number'])){

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

        if (preg_match("/^[^@]+@[^@]+\.[a-z]{2,6}$/i", $email) && preg_match('/^[0-9]{10}+$/', $phone_number)){

            $verify = $user->check_if_already_exists($email);
                // var_dump($verify);
            if ($password == $password_conf){
                $password = password_hash($password, PASSWORD_BCRYPT);
                if(count($verify) == 0){
                    $user->register($civility, $firstname, $lastname, $email, $password, $adress, $zip_code, $city, $phone_number);
                }
                else{
                    echo 'user récurant';
                }
            }
        }
        else{
            echo 'Email ou numéros de téléphone invalide';
        }
    }
    else{
        echo "champ vide";
    }
        // var_dump($_POST);
    }

?>