<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Day</title>

    <script src="./Libraries/Scripts/burger-menu-manager.js"></script>
    <script src="./Libraries/Scripts/slider.js"></script>

    <link rel="stylesheet" href="./Libraries/Style/CSS/index.css">
    <link rel="stylesheet" href="./Libraries/Style/CSS/inscription.css">
    <link rel="stylesheet" href="./Libraries/Style/CSS/header.css">
    <link rel="stylesheet" href="./Libraries/Style/CSS/footer.css">
    <link rel="stylesheet" href="./Libraries/Style/CSS/index.css">
    <link rel="stylesheet" href="./Libraries/Style/CSS/inscription.css">
    <link rel="stylesheet" href="./Libraries/Style/CSS/connexion.css">
</head>
<body>

<header>
    <div id="myLinks">
        <div id="left-links">
            <?php if(!empty($_SESSION)) { ?>
                <a href="./Libraries/Views/deconnexion.php">
                    <img src="./Libraries/Style/Icons/logout.png" alt="">
                    <p>Déconnexion</p>
                </a>
                <a href="./Libraries/Views/profil.php">
                    <img src="./Libraries/Style/Icons/avatar.png" alt="">
                    <p>Profil</p>
                </a>
            <?php } else { ?>
                <a href="./Libraries/Views/connexion.php">
                    <img src="./Libraries/Style/Icons/login.png" alt="">
                    <p>Connexion</p>
                </a>
                <a href="./Libraries/Views/inscription.php">
                    <img src="./Libraries/Style/Icons/add-user.png" alt="">
                    <p>Inscription</p>
                </a>
                <?php } ?>
        </div>
        
        <a href="index.php"><img src="./Libraries/Style/Images/logo.png" class="logo"></a>
        
        <div id="right-links">
            <a href="./Libraries/Views/adherer.php">
                <img src="./Libraries/Style/Icons/star.png" alt="">
                <p>Adhésion</p>
            </a>
            <a href="./Libraries/Views/contact.php">
                <img src="./Libraries/Style/Icons/support.png" alt="">
                <p>Contact</p>
            </a>
        </div>
    </div>
</header>

<main>