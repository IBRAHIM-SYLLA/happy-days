<?php
session_start();
require_once '../Controllers/connexion.php';
include_once '../Imports/header.php';
?>


 <?php   var_dump($_SESSION) ?>
<form class="info-form" action="" method="post">
    <label for="email">Email</label>
    <input type="text" name="email" id="">

    <label for="password">Mot de passe</label>
    <input type="text" name="password" id="">

    <button type="submit" name="connect">Connexion</button>
    <a href="inscription.php">insss</a>
</form>

<?php include_once '../Imports/footer.php';
?>