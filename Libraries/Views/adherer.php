<?php 
require_once '../Imports/header.php';
?>

<section id="adherer">

<div id="adhesion-card">
    <h1>Voulez allez procéder au paiement pour adhérer.</h1>
    <h3>Les frais d'adhésion sont de 10€</h3>

    <p><b><u>Note:</u></b> L'adhésion permet d'être aventageux lors des évènement.</p>
    <?php if(!empty($_SESSION)) { ?>
        <a href="paiement.php">J'adhère !</a>
    <?php } else { ?>
        <a href="connexion.php">Veuillez d'abord vous connecter</a>
    <?php } ?>
</div>

</section>

<?php require_once '../Imports/footer.php'; ?>