<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="./Libraries/Scripts/burger-menu-manager.js"></script>
    <script src="./Libraries/Scripts/slider.js"></script>

    <?php
    // vérifie si l'user est sur mobile ou non
    function isMobile() {
        return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
    }

    isMobile() ? $cssDIR = "./Libraries/Style/CSS/Mobile/" : $cssDIR = "./Libraries/Style/CSS/Desktop/";
    ?>

    <link rel="stylesheet" href="<?= $cssDIR ?>style.css">
</head>
<body>

<header>
    <a href="index.php"><img src="./Libraries/Style/Images/logo.png" class="logo"></a>
</header>


<main>