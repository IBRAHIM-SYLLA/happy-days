<?php
require_once '../Models/User.php';
require_once '../Models/Event.php';
require_once '../Controllers/functions.php';

$user = new User();

$allUsers = $user->selectAllUsers();

function updateUserAdmin($email, $adress, $zip_code, $city, $id_right, $phone_number){

    $user = new User();
    $idUser = $_GET['id'];

        if (!empty($_POST['id_right']) && !empty($_POST['email']) && !empty($_POST['adress']) && !empty($_POST['zip_code']) && !empty($_POST['city']) && !empty($_POST['phone_number'])){

            $email = security($_POST['email']);
            $adress = security($_POST['adress']);
            $zip_code = security($_POST['zip_code']);
            $city = security($_POST['city']);
            $id_right = security($_POST['id_right']);
            $phone_number = security($_POST['phone_number']);

            if (preg_match("/^[^@]+@[^@]+\.[a-z]{2,6}$/i", $email) && preg_match('/^[0-9]{10}+$/', $phone_number)){

                    $user->update_user_admin($email, $adress, $zip_code, $city, $id_right, $phone_number, $idUser);
                    header('Refresh: 0');
            }
            else{
                echo "numéros de téléphone ou email invalide";
            }
        }
        else{
            echo "champs vide";
        }
}

if (isset($_POST['update'])){
    updateUserAdmin($_POST['email'], $_POST['adress'], $_POST['zip_code'], $_POST['city'], $_POST['id_right'], $_POST['phone_number']);
}
?>