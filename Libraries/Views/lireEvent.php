<?php
require_once '../Controllers/admin.php';
require_once '../Models/Event.php';

$idEvent = $_GET['id'];

$dataEvent = $event->selectAllWhereId($idEvent);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <img src="../uploads/<?= $dataEvent[0]['image']; ?>" alt=""><br>
    <?= $dataEvent[0]['name']; ?><br>
    <?= $dataEvent[0]['date']; ?><br>
    <?= $dataEvent[0]['description']; ?>
    <a href="gestionEvent.php"><button>retour</button></a>
</body>
</html>