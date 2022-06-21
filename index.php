<?php
session_start();

if (isset($_POST['deconnex'])){
    session_destroy();
    header('Location: connexion.php');
}

include_once('./Libraries/Imports/header.php');
?>

<body>
    <?php var_dump($_SESSION) ?>
    <a href="./Libraries/Views/inscription.php">inscription</a>
    <a href="./Libraries/Views/connexion.php">connexion</a>
    <form action="" method="post">
        <button type="submit" name='deconnex'>deconnexion</button>
    </form>
</body>
</html>