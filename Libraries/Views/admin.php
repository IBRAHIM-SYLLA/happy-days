<?php
require_once "../Imports/header.php";
if(!empty($_SESSION['utilisateurs']) && $_SESSION['utilisateurs'][0]['id_right'] != 2022){
    header('Location: ../../index.php');
}
?>

<section id="admin">

<div id="admin-card">
    <h1>Gestion administrateur</h1>
    <span class="line"></span>
    <a href="gestionUser.php">Gestion des utilisateurs</a>
    <span class="line"></span>
    <a href="gestionEvent.php">Gestion des évènements</a>
</div>

</section>

<?php
require_once "../Imports/footer.php" ?>