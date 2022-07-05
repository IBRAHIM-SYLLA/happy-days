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
<?php foreach($allUsers as $allUser):?>
        <?= $allUser['firstname']; ?><br>
        <?= $allUser['lastname']; ?><br>
        <?= $allUser['email']; ?><br>
       <a href="lireUser?id=<?= $allUser['id']?>"><button type="submit">Lire</button></a>
<?php endforeach; ?>

</body>
</html>