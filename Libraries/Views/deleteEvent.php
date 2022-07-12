<?php
require_once '../Models/Event.php';
require_once '../Controllers/admin.php';
$idEvent = $_GET['id'];

$event = new Event();
$dataEvent = $event->selectEvent($idEvent);

if (isset($_POST['delete'])){
    $event->deleteEvent($idEvent);
    header('Location: gestionEvent.php');
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <strong><p>Voulez-vous vraiment supprimer l'évènement dont le nom  est <?=$dataEvent[0]['name']?> de la base de données ?</p></strong>
   <form action="" method="post">
        <button type="submit" name="delete">Supprimer</button>
   </form>
   <a href="gestionEvent.php"><button>retour</button></a>
</body>
</html>