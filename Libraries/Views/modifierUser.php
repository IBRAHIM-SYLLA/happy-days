<?php
require_once '../Models/User.php';
require_once '../Controllers/admin.php';
require_once '../Imports/header.php';
$idUser = $_GET['id'];

$user = new User();
$dataUser = $user->selectAllWhereId($idUser);
?>

<section id="modifierUser">
<a href="gestionUser.php" id="back">Retour</a>


<form action="" method="post" id="modifier" name="user-card">

        <div class="field">
            <img src="../Style/Icons/balance.png" class="icon" alt="">
            <select name="id_right" id="">
                <option>1</option>
                <option>2</option>
            </select>
        </div>

        <div class="field">
            <img src="../Style/Icons/mail.png" class="icon" alt="">
            <input id="email" type="text" name="email" value="<?= $dataUser[0]['email'] ?>" autocomplete="off">
        </div>

        <div class="field">
            <img src="../Style/Icons/location-pin.png" class="icon" alt="">
            <input id="adress" type="text" name="adress" value="<?= $dataUser[0]['adress'] ?>" autocomplete="off">
            <input id="zip_code" type="text" name="zip_code" value="<?= $dataUser[0]['zip_code'] ?>" />
            <input id="city" type="text" name="city" value="<?= $dataUser[0]['city'] ?>"/>
        </div>

        <div class="field">
            <img src="../Style/Icons/phone.png" class="icon" alt="">
            <input id="phone_number" type="text" name="phone_number" value="<?= $dataUser[0]['phone_number'] ?>"/>
        </div>

        <button id="update" type="submit" name="update">Mettre a jour</button>
    </form>

    </section>
<?php
require_once '../Imports/footer.php';
?>