<?php require_once '../Controllers/user.php'; ?>

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
        <legend>Saisir toutes vos informations</legend>
        <select name="civility" id="">
            <option value="choisir">Choisir une option</option>
            <option value="homme">Homme</option>
            <option value="femme">Femme</option>
        </select>
        <label for ="firtname">NOM :</label>
        <input id="firstname" type="text" name="firstname" placeholder="nom" />

        <label for ="lastname">Prénom :</label>
        <input id="lastname" type="text" name="lastname" placeholder="Prenom" autocomplete="off">

        <label for ="adress">Adresse :</label>
        <input id="adress" type="text" name="adress" placeholder="adresse" autocomplete="off">

        <label for ="zip_code">CODE POSTALE:</label>
        <input id="zip_code" type="text" name="zip_code" placeholder="codePostale" />

        <label for ="city">Ville:</label>
        <input id="city" type="text" name="city" placeholder="ville" />

        <label for ="phone_number">N° de téléphone:</label>
        <input id="phone_number" type="text" name="phone_number" placeholder="numero" />

        <label for ="email">Email :</label>
        <input id="email" type="text" name="email" placeholder="Email" autocomplete="off">

        <label for ="password">  Mot de passe :</label>
        <input id="password" type="password" name="password" placeholder="Mot de passe" />

        <label for ="password_conf">Confirmez le mot de passe :</label>
        <input id="password_conf" type="password" name="password_conf" placeholder="Confirmez le mot de passe" />

        <label for="id_right"  placeholder="">droit</label>
        <input type="number" name="id_right">

        <button id="register" type="submit" name="register">Creer un compte</button>
        <p>Vous avez déjà un compte ? <br><a href="connexion.php">Connectez vous</a></p>
    </form>
</body>
</html>