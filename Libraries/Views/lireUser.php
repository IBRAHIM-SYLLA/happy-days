<?php
require_once '../Models/User.php';

$idUser = $_GET['id'];

$user = new User();
$dataUser = $user->selectUser($idUser);
// var_dump($dataUser);

require_once '../Imports/header.php';
?>

<section id="lireUser">
    <a href="./gestionUser.php">Retour</a>

    <div id="user-card">
    <h2 id="title">
        <span id="ln">
            <?= strtoupper($dataUser[0]['firstname']) ?>
        </span>
        <?= ucfirst($dataUser[0]['lastname']) ?></br>
        <span id="civ">
            <img src="<?=
                $dataUser[0]['civility'] == "homme" ? 
                "../Style/Icons/male.png" : 
                "../Style/Icons/female.png"; 
            ?>" class="icon">
        </span>
    </h2>
    

    <h3 id="rights">
        <img src="../Style/Icons/balance.png" class="icon">
        <?= 
            $dataUser[0]['id_right'] == 1 ? "Admin" : "Normal"
        ?>
    </h3>

    <p id="email">
        <img src="../Style/Icons/mail.png" class="icon">
        <?= $dataUser[0]['email'] ?>
    </p>

    <p id="adress">
        <img src="../Style/Icons/location-pin.png" class="icon">
        <?= $dataUser[0]['adress'] ?>, 
        <?= $dataUser[0]['zip_code'] ?>
        <?= $dataUser[0]['city'] ?>
    </p>

    <p id="phone">
        <img src="../Style/Icons/phone.png" class="icon">
        <?= $dataUser[0]['phone_number'] ?>
    </p>
    </div>
</section>


<?php require_once '../Imports/footer.php'; ?>