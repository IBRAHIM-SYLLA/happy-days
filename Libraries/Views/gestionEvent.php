<?php
require_once '../Controllers/admin.php';
require_once '../Imports/header.php';
?>

<section id="gestionEvent">
<a href="admin.php" id="back">Retour</a>

<div class="heading">
    <h1><?= sizeof($allEvents) ?></h1>
    <h1>évènements sont enregistrés dans la base de données.</h1>
</div>

<a href="creerEvent.php" class="new-event">Créer un évènement</a>

<table>
    <tbody>
    <?php foreach($allEvents as $allEvent): ?>
        <tr>
            <td class="id-row"><?= $allEvent['id']; ?></td>
            <td class="name-row"><?= $allEvent['name']; ?></td>
            <td class="date-row"><?= $allEvent['date']; ?></td>
            <td class="link-row">
                <a href="lireEvent.php?id=<?= $allEvent['id']?>">Lire</a>
                <a href="modifierEvent.php?id=<?= $allEvent['id']?>">Modfier</a>
                <a href="deleteEvent.php?id=<?= $allEvent['id']?>">Supprimer</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</section>

<?php
require_once '../Imports/footer.php';
?>