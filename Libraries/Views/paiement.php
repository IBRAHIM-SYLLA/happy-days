<?php
if(isset($_POST['prix']) && !empty($_POST['prix'])){
    require_once '../vendor/autoload.php';
    $prix = (float) $_POST['prix'];

    // On intencie Stripe avec la clés secrète
    \Stripe\Stripe::setApiKey('sk_test_51LKIPhE1hkhM3fmbcfm3xBcP7AvpMSoXN3rxcHZHIooZXLSkagLLYwbQxtpb9IvgpEhTeoQfizdqBq7Wy1lx2cu100HC3KqCEk');

    $intent = \Stripe\PaymentIntent::create([

        'amount' => $prix*100,  //prix en centimes
        'currency' => 'eur'
    ]);

}
else{
    header('Location: test_stripe.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/script.js"></script>
    <title>Document</title>
</head>
<body>
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
</body>
</html>