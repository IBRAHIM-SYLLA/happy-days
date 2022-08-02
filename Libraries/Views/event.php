<?php
require_once '../Controllers/admin.php';
require_once '../Models/Event.php';
require_once '../Imports/header.php';

$idEvent = $_GET['id'];

$dataEvent = $event->selectAllWhereId($idEvent);
?>

<section id="event">
<a id="back" href="./events.php">Retour</a>
<div class="event">
    <img src="../uploads/<?=$dataEvent[0]['image']; ?>" alt="">
        <h2><?= $dataEvent[0]['name']; ?></h2>
        <p><b>Description :</b> <i><?= $dataEvent[0]['description']; ?></i></p>
        <p>Cet évènement se déroule le <?= $dataEvent[0]['date']; ?></p>
</div>
</section>

<?php require_once '../Imports/footer.php'; ?>