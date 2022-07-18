<?php
require_once '../Models/User.php';

$idUser = $_GET['id'];

$user = new User();
$dataUser = $user->selectAllWhereId($idUser);
var_dump($dataUser);
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

    <?= $dataUser[0]['civility'] ?><br>
    <?= $dataUser[0]['firstname'] ?><br>
    <?= $dataUser[0]['lastname'] ?><br>
    <?= $dataUser[0]['email'] ?><br>
    <?= $dataUser[0]['adress'] ?><br>
    <?= $dataUser[0]['zip_code'] ?><br>
    <?= $dataUser[0]['city'] ?><br>
    <?= $dataUser[0]['id_right'] ?><br>
    <?= $dataUser[0]['phone_number'] ?>
    <a href="gestionUser.php"><button>retour</button></a>
</body>
</html>