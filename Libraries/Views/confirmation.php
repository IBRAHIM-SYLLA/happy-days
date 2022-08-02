<?php 
require_once '../Controllers/paiement.php';
require_once '../Controllers/functions.php';
require_once "../Imports/header.php";
$user->update_member_state($idUser);
sendMailPaiement($emailUser);
?>

<div id="membership-conf">
    <h1>Merci d'avoir adhéré</h1>
    <img src="../Style/Icons/checkmark2.png" alt="">
</div>

<?php
require_once "../Imports/footer.php";
?>
