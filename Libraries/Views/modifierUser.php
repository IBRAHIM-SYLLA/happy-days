<?php
require_once '../Models/User.php';
require_once '../Controllers/admin.php';
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
<form action="" method="post">

        <select name="id_right" id="">
            <option><?=$dataUser[0]['id_right']?></option>
            <option>1</option>
            <option>2</option>
        </select>
        <label for ="email">Email :</label>
        <input id="email" type="text" name="email" value="<?= $dataUser[0]['email'] ?>" autocomplete="off">

        <label for ="adress">Adresse :</label>
        <input id="adress" type="text" name="adress" value="<?= $dataUser[0]['adress'] ?>" autocomplete="off">

        <label for ="zip_code">CODE POSTALE:</label>
        <input id="zip_code" type="text" name="zip_code" value="<?= $dataUser[0]['zip_code'] ?>" />

        <label for ="city">Ville:</label>
        <input id="city" type="text" name="city" value="<?= $dataUser[0]['city'] ?>"/>

        <label for ="phone_number">N° de téléphone:</label>
        <input id="phone_number" type="text" name="phone_number" value="<?= $dataUser[0]['phone_number'] ?>"/>

        <button id="update" type="submit" name="update">Mettre a jour</button>
        <a href="../../index.php">Revenir</a>
    </form>
    <a href="gestionUser.php"><button>retour</button></a>
</body>
</html>