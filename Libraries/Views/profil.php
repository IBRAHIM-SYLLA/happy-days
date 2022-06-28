<?php
require_once '../Controllers/profil.php';
var_dump($_POST);
var_dump($_SESSION['utilisateurs'][0]['id']);
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
        <label for ="email">Email :</label>
        <input id="email" type="text" name="email" value="<?= $dataUser[0]['email'] ?>" autocomplete="off">

        <label for ="password">  Mot de passe :</label>
        <input id="password" type="password" name="password" placeholder="*********" />

        <label for ="password_conf">Confirmez le mot de passe :</label>
        <input id="password_conf" type="password" name="password_conf" placeholder="Confirmez le mot de passe" />

        <label for ="adress">Adresse :</label>
        <input id="adress" type="text" name="adress" value="<?= $dataUser[0]['adress'] ?>" autocomplete="off">

        <label for ="zip_code">CODE POSTALE:</label>
        <input id="zip_code" type="text" name="zip_code" value="<?= $dataUser[0]['zip_code'] ?>" />

        <label for ="city">Ville:</label>
        <input id="city" type="text" name="city" value="<?= $dataUser[0]['city'] ?>"/>

        <label for ="phone_number">N° de téléphone:</label>
        <input id="phone_number" type="text" name="phone_number" value="<?= $dataUser[0]['phone_number'] ?>" />

        <button id="update" type="submit" name="update">Mettre a jour</button>
        <a href="../../index.php">Revenir</a>
    </form>
</body>
</html>