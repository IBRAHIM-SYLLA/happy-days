<?php
require_once('../Controllers/admin.php');
require_once('../Imports/header.php');
?>

<section id="gestionUser">
<div class="heading">
    <h1><?= sizeof($allUsers) ?></h1>
    <h3>utilisateurs sont enregistrés dans la base de données.</h3>
</div>

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
            <tr id="<?= $allUser['id']; ?>">
                <td class="id-row"><?= $allUser['id']; ?></td>
                <td class="fn-row"><?= $allUser['firstname']; ?></td>
                <td class="ln-row"><?= $allUser['lastname']; ?></td>
                <td class="mail-row"><?= $allUser['email']; ?></td>
                <td class="link-row">
                    <a href="lireUser?id=<?= $allUser['id']?>">Lire</a>
                    <a href="">Modifier</a>
                    <a href="">Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</section>

<?php require_once('../Imports/footer.php'); ?>