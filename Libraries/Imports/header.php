<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="../Scripts/burger-menu-manager.js"></script>
    
    <?php
    $hasForm = false;
    if($hasForm): ?>
        <script src="../Scripts/form-tabs-manager.js"></script>
    <?php endif; ?>

    <?php
    // vérifie si l'user est sur mobile ou non
    function isMobile() {
        return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
    }
    isMobile() ? $cssDIR = "../Style/CSS/Mobile/" : $cssDIR = "../Style/CSS/Desktop/";
    ?>

    <link rel="stylesheet" href="<?= $cssDIR ?>style.css">
</head>
<body>

<header>
    <a href="index.php"><img src="../Style/Images/logo.png" id="logo"></a>
</header>


<main>