<?php
require_once '../Imports/header.php';
?>

<section id="contact">
<form action="">
    <div class="field">
        <label for="name">Prénom</label>
        <input type="text" name="name">
    </div>

    <div class="field">
        <label for="last-name">Nom</label>
        <input type="text" name="last-name">
    </div>

    <div class="field">
        <label for="mail">Adresse mail</label>
        <input type="mail" name="mail">
    </div>

    <div class="field">
        <label for="message">Message</label>
        <textarea name="message" id="" cols="30" rows="10"></textarea>
    </div>
    
    <input type="button" value="Envoyer">
</form>
</section>

<?php
require_once '../Imports/footer.php';
?>