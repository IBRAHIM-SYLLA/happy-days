<?php
require_once '../Models/User.php';
require_once '../Controllers/admin.php';
$idUser = $_GET['id'];

$user = new User();
$dataUser = $user->selectAllWhereId($idUser);
// var_dump($dataUser);

if (isset($_POST['delete'])){
    $user->delete($idUser);
    header('Location: gestionUtilisateurs.php');
}
var_dump($idUser);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <strong><p>Voulez-vous vraiment supprimer l'utilisateur dont l'email est <?=$dataUser[0]['email']?> de la base de données ?</p></strong>
   <form action="" method="post">
        <button type="submit" name="delete">Supprimer</button>
   </form>
   <a href="gestionUser.php"><button>retour</button></a>
</body>
</html>