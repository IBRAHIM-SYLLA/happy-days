<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Day</title>

    <script src="../Scripts/burger-menu-manager.js"></script>
    <script src="../Scripts/form-tabs-manager.js"></script>
    <script src="../Scripts/check-input-validity.js"></script>
    <script src="../Controllers/js/script.js"></script>

    <link rel="stylesheet" href="../Style/CSS/index.css">
    <link rel="stylesheet" href="../Style/CSS/inscription.css">
    <link rel="stylesheet" href="../Style/CSS/header.css">
    <link rel="stylesheet" href="../Style/CSS/footer.css">
    <link rel="stylesheet" href="../Style/CSS/index.css">
    <link rel="stylesheet" href="../Style/CSS/inscription.css">
    <link rel="stylesheet" href="../Style/CSS/connexion.css">
    <link rel="stylesheet" href="../Style/CSS/gestionUtilisateurs.css">
    <link rel="stylesheet" href="../Style/CSS/gestionEvent.css">
    <link rel="stylesheet" href="../Style/CSS/lireUser.css">
    <link rel="stylesheet" href="../Style/CSS/lireEvent.css">
    <link rel="stylesheet" href="../Style/CSS/modifierUser.css">
    <link rel="stylesheet" href="../Style/CSS/modifierEvent.css">
    <link rel="stylesheet" href="../Style/CSS/events.css">
    <link rel="stylesheet" href="../Style/CSS/adherer.css">
    <link rel="stylesheet" href="../Style/CSS/admin.css">
    <link rel="stylesheet" href="../Style/CSS/modifier.css">
    <link rel="stylesheet" href="../Style/CSS/paiement.css">
    <link rel="stylesheet" href="../Style/CSS/confirmation.css">
    <link rel="stylesheet" href="../Style/CSS/profil.css">
    <link rel="stylesheet" href="../Style/CSS/events.css">
    <link rel="stylesheet" href="../Style/CSS/contact.css">
</head>
<body>

<header>
<div id="myLinks">
        <div id="left-links">
            <?php if(!empty($_SESSION)) { ?>
                <a href="../../Libraries/Views/deconnexion.php">
                    <img src="../../Libraries/Style/Icons/logout.png" alt="">
                    <p>Déconnexion</p>
                </a>
                <a href="../../Libraries/Views/profil.php">
                    <img src="../../Libraries/Style/Icons/avatar.png" alt="">
                    <p>Profil</p>
                </a>
            <?php } else { ?>
                <a href="../../Libraries/Views/connexion.php">
                    <img src="../../Libraries/Style/Icons/login.png" alt="">
                    <p>Connexion</p>
                </a>
                <a href="../../Libraries/Views/inscription.php">
                    <img src="../../Libraries/Style/Icons/add-user.png" alt="">
                    <p>Inscription</p>
                </a>
                <?php } ?>
        </div>
        
        <a href="../../index.php"><img src="../../Libraries/Style/Images/logo.png" class="logo"></a>
        
        <div id="right-links">
            <a href="../../Libraries/Views/adherer.php">
                <img src="../../Libraries/Style/Icons/star.png" alt="">
                <p>Adhésion</p>
            </a>
            <a href="../../Libraries/Views/contact.php">
                <img src="../../Libraries/Style/Icons/support.png" alt="">
                <p>Contact</p>
            </a>
        </div>
    </div>
</header>


<main>