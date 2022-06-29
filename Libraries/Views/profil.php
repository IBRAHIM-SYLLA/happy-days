<?php
require_once '../Controllers/profil.php';
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
        <label for ="email">Email :</label>
        <input id="email" type="text" name="email" placeholder="<?= $dataUser[0]['email'] ?>" autocomplete="off">

        <label for ="password">  Mot de passe :</label>
        <input id="password" type="password" name="password" placeholder="Mot de passe" />

        <label for ="password_conf">Confirmez le mot de passe :</label>
        <input id="password_conf" type="password" name="password_conf" placeholder="Confirmez le mot de passe" />

        <label for ="adress">Adresse :</label>
        <input id="adress" type="text" name="adress" placeholder="<?= $dataUser[0]['adress'] ?>" autocomplete="off">

        <label for ="zip_code">CODE POSTALE:</label>
        <input id="zip_code" type="text" name="zip_code" placeholder="<?= $dataUser[0]['zip_code'] ?>" />

        <label for ="city">Ville:</label>
        <input id="city" type="text" name="city" placeholder="<?= $dataUser[0]['city'] ?>"/>

        <label for ="phone_number">N° de téléphone:</label>
        <input id="phone_number" type="text" name="phone_number" placeholder="<?= $dataUser[0]['phone_number'] ?>" />

        <button id="register" type="submit" name="register">Creer un compte</button>
</body>
</html>