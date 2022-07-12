<?php
session_start();
require_once '../Models/User.php';
require_once '../Controllers/functions.php';

$user = new User();
$idUser = $_SESSION['utilisateurs'][0]['id'];
$emailUser = $_SESSION['utilisateurs'][0]['email'];
if(!empty($_SESSION)){
    require_once '../vendor/autoload.php';
    $prix = (float) 10;

    // On intencie Stripe avec la clés secrète
    \Stripe\Stripe::setApiKey('sk_test_51LKIPhE1hkhM3fmbcfm3xBcP7AvpMSoXN3rxcHZHIooZXLSkagLLYwbQxtpb9IvgpEhTeoQfizdqBq7Wy1lx2cu100HC3KqCEk');

    $intent = \Stripe\PaymentIntent::create([

        'amount' => $prix * 100,  //prix en centimes
        'currency' => 'eur'       // on indique la monnaie utilisé
    ]);
    $user->update_member_state($idUser);
    sendMail($emailUser, $_SESSION['utilisateurs'][0]['lastname']);
}
else{
    header('Location: adherer.php');
}

?>