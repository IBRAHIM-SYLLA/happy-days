<?php
require_once '../Imports/header.php';
require_once '../Controllers/admin.php';
require_once '../Models/Event.php';

$idEvent = $_GET['id'];
$dataEvent = $event->selectAllWhereId($idEvent);
?>

<section id="modifierEvent">
    <a href="gestionEvent.php" id="back">Retour</a>

    <form action="" method="post" id="event-card">
        <h4 class="err-msg"><?= $error ?></h4>
        <img id="event-img" src="../uploads/<?= $dataEvent[0]['image'] ?>" alt="Image de l'évènement">

        <div class="field">        
            <label for="name">Nom:</label>
            <input type="text" name="name"  id="" value="<?= $dataEvent[0]['name'];?>">
        </div>
        <div class="field">
            <label for="date">Date:</label>
            <input type="date" name="date" id="">
        </div>
        <div class="field">
            <label for="heure">Heure:</label>
            <select name="heuredebut" id="">
                <option value="heure de début">Sélectionner une heure</option>
                <option value="08:00:00">08h:00</option>
                <option value="09:00:00">09h:00</option>
                <option value="10:00:00">10h:00</option>
                <option value="11:00:00">11h:00</option>
                <option value="12:00:00">12h:00</option>
                <option value="13:00:00">13h:00</option>
                <option value="14:00:00">14h:00</option>
                <option value="15:00:00">15h:00</option>
                <option value="16:00:00">16h:00</option>
                <option value="17:00:00">17h:00</option>
                <option value="18:00:00">18h:00</option>
                <option value="19:00:00">19h:00</option>
                <option value="20:00:00">20h:00</option>
            </select>
        </div>
        <div class="field">
            <label for="description">Description:</label>
            <textarea rows="5" type="textarea" name="description" id="" value="<?= $dataEvent[0]['description']; ?>"></textarea>
        </div>

        <button type="submit" name="update_event">Modifier</button>
    </form>

</section>

<?php
require_once '../Imports/footer.php';
?>