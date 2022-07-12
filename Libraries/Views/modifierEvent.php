<?php
require_once '../Controllers/admin.php';
require_once '../Models/Event.php';

$idEvent = $_GET['id'];

$dataEvent = $event->selectEvent($idEvent);


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
<form action="" method="post">
        <label for="name">Nom:</label>
        <input type="text" name="name"  id="" value="<?= $dataEvent[0]['name'];?>">

        <label for="date">Date:</label>
        <input type="date" name="date" id="">

        <label for="heure">Heure:</label>
        <select name="heuredebut" id="">
            <option value="heure de début">l'heure de début</option>
            <option value="08:00:00">08h:00</option>
            <option value="09:00:00">09h:00</option>
            <option value="10:00:00">10h:00</option>
            <option value="11:00:00">11h:00</option>
            <option value="12:00:00">12h:00</option>
            <option value="13:00:00">13h:00</option>
            <option value="14:00:00">14h:00</option>
            <option value="15:00:00">15h:00</option>
            <option value="16:00:00">16h:00</option>
            <option value="17:00:00">17h:00</option>
            <option value="18:00:00">18h:00</option>
            <option value="19:00:00">19h:00</option>
            <option value="20:00:00">20h:00</option>
        </select>

        <label for="description">Description:</label>
        <input type="text" name="description" id="" value="<?= $dataEvent[0]['description']; ?>">

        <button type="submit" name="update_event">Modifier</button>
    </form>
</body>
</html>