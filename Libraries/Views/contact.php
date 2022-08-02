<?php
require_once '../Imports/header.php';
require_once '../Controllers/contact.php';
?>

<section id="contact">
    <h1>Formulaire de contact</h1>
<form action="" method="post">
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

    <button type="submit" name="contact">Envoyer</button>
</form>
</section>

<?php
require_once '../Imports/footer.php';
?>