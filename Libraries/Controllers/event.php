<?php
session_start();
require_once '../Models/Event.php';

$event = new Event();
// if (!empty($_POST['date'])) {
//     $date = $_POST['date'];

//     $dateheure = explode(' ', $date);

//     $jour = $dateheure['0'];
//     $jourpost = date('d/m/Y', strtotime($jour));
// }
if (isset($_POST['creer'])){

    if (!empty($_POST['name']) && !empty($_POST['description']) && !empty($_POST['image']) &&
        !empty($_POST['date']) && !empty($_POST['heuredebut'])){

        $name = $_POST['name'];
        $description = $_POST['description'];
        $image = $_POST['image'];
        $dateEvent = $_POST['date'].' '.$_POST['heuredebut'];
        $event->registerEvent($name, $dateEvent, $description, $image);
    }
    else{
        echo 'champ vide';
    }
}
?>