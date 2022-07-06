<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="/happy-days/Libraries/Scripts/burger-menu-manager.js"></script>
    <script src="/happy-days/Libraries/Scripts/form-tabs-manager.js"></script>

    <?php
    // vérifie si l'user est sur mobile ou non
    function isMobile() {
        return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
    }
    isMobile() ? $cssDIR = "/happy-days/Libraries/Style/CSS/Mobile/" : $cssDIR = "/happy-days/Libraries/Style/CSS/Desktop/";
    ?>

    <link rel="stylesheet" href="<?= $cssDIR ?>style.css">
</head>
<body>

<header>
    <a href="index.php"><img src="/happy-days/Libraries/Style/Images/logo.png" id="logo"></a>
</header>


<main>