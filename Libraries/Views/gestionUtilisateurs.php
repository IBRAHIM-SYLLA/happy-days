<?php
require_once('../Controllers/admin.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
</head>
<body>
    <table>
        <thead>
            <tr>ID</tr>
            <tr>Prénom</tr>
            <tr>Nom</tr>
            <tr>Email</tr>
        </thead>

        <tbody>
    <?php foreach($allUsers as $allUser):?>
        <tr><?= $allUser['id']; ?></tr>
        <tr><?= $allUser['firstname']; ?></tr>
        <tr><?= $allUser['lastname']; ?></tr>
        <tr><?= $allUser['email']; ?></tr>
        <tr><a href="lireUser?id=<?= $allUser['id']?>"><button type="submit">Lire</button></a></tr>
    <?php endforeach; ?>
</tbody>
</table>

</body>
</html>