<?php
// require_once '../Models/Event.php';
require_once '../Controllers/event.php';
require_once '../Imports/header.php';
?>
<section id="allEvents">
    <?php foreach ($fetchAllEvents as $fetchAllEvent): ?>
            <div class="event">
                <img src="../uploads/<?=$fetchAllEvent['image']; ?>" alt="">
                <h4><?= $fetchAllEvent['name']; ?></h4>
                <h4><?= $fetchAllEvent['date']; ?></h4>
                <a href="event.php?id=<?=$fetchAllEvent['id']; ?>"><button>Voir l'event</button></a>
            </div>
    <?php endforeach; ?>
</section>

<?php include_once '../Imports/footer.php'; ?>