<?php
require_once '../Imports/header.php';
require_once '../Controllers/paiement.php';
?>

    <form action="" method="post">
        <div id="errors">
            <!-- contiendra les messages d'érreurs de paiement -->
        </div>

        <div class="card-form">
            <p id="title">HappyBank</p>
            <div id="card-elements">
                <!-- contiendra le formulaire de saisie des info de carte -->
            </div>
            <input type="text" name="" id="cardholder-name" placeholder="Titulaire de la carte">
            <button id="card-button" type="button" data-secret="<?= $intent['client_secret'] ?>" >Procéder au paiement</button>
        </div>
        
        <div id="card-errors" role="alert">
            <!-- contiendra les erreurs relative a la carte -->
        </div>
    </form>
    <script src="https://js.stripe.com/v3/"></script>

<?php 
require_once '../Imports/footer.php'; 
?>