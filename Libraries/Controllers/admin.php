<?php
require_once '../Models/User.php';
require_once '../Models/Event.php';
require_once '../Controllers/functions.php';

// on instencie les class

// ---------------------------- User ------------------------//
$user = new User();

$allUsers = $user->selectAllData();

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

function registerAdmin($civility, $firstname, $lastname, $email, $password, $adress, $zip_code, $city, $id_right, $phone_number){
    $user = new User();

    if (!empty($_POST['civility']) && !empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['password']) &&
    !empty($_POST['password_conf']) && !empty($_POST['adress']) && !empty($_POST['zip_code']) && !empty($_POST['city']) && !empty($_POST['id_right']) &&
    !empty($_POST['phone_number'])){

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
        $id_right = security($_POST['id_right']);

        if (preg_match("/^[^@]+@[^@]+\.[a-z]{2,6}$/i", $email) && preg_match('/^[0-9]{10}+$/', $phone_number)){

            $verify = $user->verify_and_connect($email);
                // var_dump($verify);
            if ($password == $password_conf){
                $password = password_hash($password, PASSWORD_BCRYPT);
                if(count($verify) == 0){
                    $user->register_admin($civility, $firstname, $lastname, $email, $password, $adress, $zip_code, $city, $id_right, $phone_number);
                    sendMail($email, $lastname);
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
}

if(isset($_POST['registerAdmin'])){

    registerAdmin($_POST['civility'], $_POST['firstname'], $_POST['lastname'], $_POST['email'], $_POST['password'],
                $_POST['password_conf'], $_POST['adress'], $_POST['zip_code'], $_POST['city'], $_POST['id_right'],
                $_POST['phone_number']);
}

// ---------------------------- Event ------------------------------------ //

$event = new Event();

$allEvents = $event->selectAllData();

function update_event($name, $date, $heuredebut, $description){

    if(!empty($_POST['name']) && !empty($_POST['date']) && !empty($_POST['heuredebut']) && !empty($_POST['description'])){

        $idEvent = $_GET['id'];
        $name = security($_POST['name']);
        $description = security($_POST['description']);
        $date = security($_POST['date']);
        $heuredebut = security($_POST['heuredebut']);
        $dateEvent = $date.' '.$heuredebut;

        $event = new Event();
        $event->updateEvent($name, $dateEvent, $description, $idEvent);
        header('Refresh: 0');
    }
    else{
        echo 'champs vide';
    }
}

if (isset($_POST['update_event'])){
    update_event($_POST['name'], $_POST['date'], $_POST['heuredebut'], $_POST['description']);
}

?>