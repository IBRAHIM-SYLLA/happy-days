<?php
require_once '../Controllers/paiement.php';
require_once '../Controllers/functions.php';
$user->update_member_state($idUser);
sendMailPaiement($emailUser);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Merci d'avoir adhérer</h1>
</body>
</html>