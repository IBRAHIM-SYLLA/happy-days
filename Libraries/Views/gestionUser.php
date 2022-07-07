<?php
require_once('../Controllers/admin.php');
// require_once('../Imports/header.php');
?>

<div class="heading">
    <h1><?= sizeof($allUsers) ?></h1>
    <h3>utilisateurs sont enregistrés dans la base de données.</h3>
</div>
    <a href="creerUser.php"><button>Creer un utilisateur</button></a>
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
            <td class="link-row"><a href="lireUser?id=<?= $allUser['id']?>"><button type="submit">Lire</button></a></td>
            <td class="link-row"><a href="modifierUser.php?id=<?= $allUser['id']?>"><button type="submit">Modfier</button></a></td>
            <td class="link-row"><a href="supprimerUser.php?id=<?= $allUser['id']?>"><button type="submit">Supprimer</button></a></td>
        </tr>
    <?php endforeach; ?>
        </tbody>
    </table>

<?php require_once('../Imports/footer.php'); ?>