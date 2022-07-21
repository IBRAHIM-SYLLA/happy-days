<?php
require_once '../Controllers/paiement.php';
require_once '../Imports/header.php';
?>

    <form action="" method="post">
        <div id="errors">
            <!-- contiendra les messages d'érreurs de paiement -->
        </div>
        <input type="text" name="" id="cardholder-name" placeholder="Titulaire de la carte">
        <div id="card-elements">
            <!-- contiendra le formulaire de saisie des info de carte -->
        </div>
        <div id="card-errors" role="alert">
            <!-- contiendra les erreurs relative a la carte -->
        </div>
        <button id="card-button" type="button" data-secret="<?= $intent['client_secret'] ?>" >Procéder au paiement</button>

    </form>
    <script src="https://js.stripe.com/v3/"></script>

<?php 
require_once '../Imports/footer.php'; 
?>