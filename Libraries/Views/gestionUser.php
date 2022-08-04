<?php
require_once('../Imports/header.php');
require_once('../Controllers/admin.php');
?>

<section id="gestionUser">
<a href="admin.php" id="back">Retour</a>

<div class="heading">
    <h1><?= sizeof($allUsers) ?></h1>
    <h3>utilisateurs sont enregistrés dans la base de données.</h3>
</div>
    <a href="creerUser.php" class="new-user">Créer un utilisateur</a>
    <table>
        <thead>
            <tr>
                <td>ID</td>
                <td>Prénom</td>
                <td>Nom</td>
                <td>Email</td>
            </tr>
        </thead>

        <tbody>
    <?php foreach($allUsers as $allUser):?>
        <tr>
            <td class="id-row"><?= $allUser['id']; ?></td>
            <td class="fn-row"><?= $allUser['firstname']; ?></td>
            <td class="ln-row"><?= $allUser['lastname']; ?></td>
            <td class="mail-row"><?= $allUser['email']; ?></td>
            <td class="link-row">
                <a href="lireUser?id=<?= $allUser['id']?>">Lire</a>
                <a href="modifierUser.php?id=<?= $allUser['id']?>">Modifier</a>
                <a href="deleteUser.php?id=<?= $allUser['id']?>">Supprimer</a>
            </td>
        </tr>
    <?php endforeach; ?>
        </tbody>
    </table>
</section>

<?php require_once('../Imports/footer.php'); ?>