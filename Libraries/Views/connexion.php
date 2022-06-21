<?php
session_start();
require_once '../Controllers/connexion.php';

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
 <?php   var_dump($_SESSION) ?>
    <form action="" method="post">
        <label for="email">Email</label>
        <input type="text" name="email" id="">

        <label for="password">Mot de passe</label>
        <input type="text" name="password" id="">

        <button type="submit" name="connect">Connexion</button>
        <a href="inscription.php">insss</a>
    </form>
</body>
</html>