<?php
require_once '../Controllers/admin.php';
require_once '../Models/Event.php';
require_once '../Imports/header.php';

$idEvent = $_GET['id'];

$dataEvent = $event->selectAllWhereId($idEvent);

?>

<section id="lireEvent">
    <a href="gestionEvent.php">Retour</a>

    <div id="event-card">
        <h2 id="title"><?= strtoupper($dataEvent[0]['name']) ?></h2>
        <img id="event-img" src="../uploads/<?= $dataEvent[0]['image']; ?>" alt="">
        <span id="date">
            <img class="icon" src="../Style/Icons/calendar.png" alt="">
            <?= $dataEvent[0]['date']; ?>
        </span>
        <span id="desc">
            <img class="icon" src="../Style/Icons/info.png" alt="">
            <?= $dataEvent[0]['description']; ?>
        </span>
    </div>

</section>

<?php 
require_once '../Imports/footer.php';
?>