<?php
session_start();

if (isset($_POST['deconnex'])){
    session_destroy();
    header('Location: connexion.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Days</title>
</head>
<body>
    <?php var_dump($_SESSION) ?>
    <a href="inscription.php">inscription</a>
    <a href="connexion.php">connexion</a>
    <?php if (!empty($_SESSION)): ?>
        <a href="profil.php">Mon profil</a>
        <form action="" method="post">
            <button type="submit" name='deconnex'>deconnex</button>
        </form>
        <?php endif; ?>
</body>
</html>