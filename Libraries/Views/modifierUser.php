<?php
require_once '../Models/User.php';
require_once '../Controllers/admin.php';
require_once '../Imports/header.php';
$idUser = $_GET['id'];

$user = new User();
$dataUser = $user->selectAllWhereId($idUser);
?>

<a href="gestionUser.php" id="back">Retour</a>

<form action="" method="post" id="modifier">

        <select name="id_right" id="">
            <option>1</option>
            <option>2</option>
        </select>
        <label for ="email">Email :</label>
        <input id="email" type="text" name="email" value="<?= $dataUser[0]['email'] ?>" autocomplete="off">

        <label for ="adress">Adresse :</label>
        <input id="adress" type="text" name="adress" value="<?= $dataUser[0]['adress'] ?>" autocomplete="off">

        <label for ="zip_code">CODE POSTALE:</label>
        <input id="zip_code" type="text" name="zip_code" value="<?= $dataUser[0]['zip_code'] ?>" />

        <label for ="city">Ville:</label>
        <input id="city" type="text" name="city" value="<?= $dataUser[0]['city'] ?>"/>

        <label for ="phone_number">N° de téléphone:</label>
        <input id="phone_number" type="text" name="phone_number" value="<?= $dataUser[0]['phone_number'] ?>"/>

        <button id="update" type="submit" name="update">Mettre a jour</button>
        <a href="../../index.php">Revenir</a>
    </form>


<?php
require_once '../Imports/footer.php';
?>