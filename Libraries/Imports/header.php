<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../Style/style.css">

    <?php
    // vérifie si l'user est sur mobile ou non
    function isMobile() {
        return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
    }

    if(isMobile()) {
        ?>
        <!-- METTRE LES SCRIPTS MOBILE ICI -->
        <script src="../Scripts/mob-tabs-manager.js"></script>
        <?php
    }
    ?>
</head>
<body>

<header>
    <!-- Header ici -->
    <h1>Header</h1>
</header>

<main>