<?php
session_start();
require_once '../Models/Event.php';
require_once 'functions.php';

$event = new Event();

if (isset($_POST['creer'])){

    if (!empty($_POST['name']) && !empty($_POST['description']) &&
        !empty($_POST['date']) && !empty($_POST['heuredebut'])){

        // on vérifie si un fichier a été envoyé
        if(!empty($_FILES["image"]) && $_FILES["image"]["error"] == 0){

            // on a reçu l'image
            // var_dump($_FILES);

            $name = security($_POST['name']);
            $description = security($_POST['description']);
            $dateEvent = $_POST['date'].' '.$_POST['heuredebut'];

            //  on procède au vérification
            // on vérifie toujours l'extention ET le type Mime
            $allowed = [
                "jpg" => "image/jpeg",
                "jpeg" => "image/jpeg",
                "png" => "image/png",
            ];

            $filename = $_FILES["image"]["name"];
            $filetype = $_FILES["image"]["type"];
            $filesize = $_FILES["image"]["size"];

            $extension = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
            // On vérifie l'absence de l'éxtension dans les clés de $allowed
            if(!array_key_exists($extension, $allowed) || !in_array($filetype, $allowed)){
                // soit l'extension soit le type est incorrect
                echo "format de fichier incorrect";
            }

             // ici le type est correct
            // on limita a 1 mo
            if ($filesize > 1024 * 1024){
                echo "fichier trop lourd";
            }

            // grâce au fichier htaccess on a pas accés au dossier upload via l'url
            // On génère un nom unique
            $newname = md5(uniqid());
            // on génère le chemin complet
            $newfilename = "../uploads/$newname.$extension";

            // on deplace le fichier en le rennomant
            if(!move_uploaded_file($_FILES["image"]["tmp_name"], $newfilename)){
                echo "l'upload a échoué";
            }

            // on interdit l'éxécution du fichier
            chmod($newfilename, 0644);
            $bddfilename =  $newname.'.'.$extension;

            $event->registerEvent($name, $dateEvent, $description, $bddfilename);
            sendMail("ibrah@ibra.com", "nouvelle évènement");
        }
    }
    else{
        echo 'champ vide';
    }

    $fetchAllEvents = $event->selectAllEvents();

    // if (!empty($_POST['date'])) {
//     $date = $_POST['date'];

//     $dateheure = explode(' ', $date);

//     $jour = $dateheure['0'];
//     $jourpost = date('d/m/Y', strtotime($jour));
// }







}

?>