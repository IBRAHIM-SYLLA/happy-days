<?php
// require_once '../Models/Event.php';
require_once '../Controllers/event.php';
// $fetchAllEvents = $event->selectAllEvents();
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
    <?php foreach ($fetchAllEvents as $fetchAllEvent): ?>

            <img src="../uploads/<?=$fetchAllEvent['image']; ?>" alt="">
            <?= $fetchAllEvent['name']; ?>
            <?= $fetchAllEvent['date']; ?>
            <a href="event.php?id=<?=$fetchAllEvent['id']; ?>"><button>Voir l'event</button></a>
        <?php endforeach; ?>
</body>
</html>