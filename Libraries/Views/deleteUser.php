<?php
require_once '../Models/User.php';
require_once '../Controllers/admin.php';
$idUser = $_GET['id'];

$user = new User();
$dataUser = $user->selectAllWhereId($idUser);

if (isset($_POST['delete'])){
    $user->delete($idUser);
    header('Location: gestionUser.php');
}
require_once '../Imports/header.php';
?>

   <strong><p>Voulez-vous vraiment supprimer l'utilisateur dont l'email est <?=$dataUser[0]['email']?> de la base de données ?</p></strong>
   <form action="" method="post">
        <button type="submit" name="delete">Supprimer</button>
   </form>
   <a href="gestionUser.php"><button>retour</button></a>
<?php require_once '../Imports/footer.php'; ?>