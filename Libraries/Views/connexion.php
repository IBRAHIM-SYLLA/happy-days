<?php
session_start();
require_once '../Controllers/connexion.php';
include_once '../Imports/header.php';
?>

<?php var_dump($_SESSION) ?>

<form class="info-form" action="" method="post">
    <div class="tab">
        <legend>Connexion</legend>
        <p class="sub-text">Entrez vos identifiants</p>

        <div class="field">
            <label for="email"><span class="required-symbol">-</span> Email</label>
            <input type="text" name="email" id="" placeholder="email@mail.com" required>
        </div>      
        
        <div class="field">
            <label for="password"><span class="required-symbol">-</span> Mot de passe</label>
            <input type="text" name="password" id="" placeholder="Mot de passe" required>
        </div>
    </div>

    <p class="connexion-suggestion">Vous n'avez pas encore de compte ? <a href="inscription.php">Inscrivez-vous</a></p>
    
    <div style="overflow:auto;">
        <button type="submit" id="nextBtn" name="connect"></button>
    </div>
</form>

<?php include_once '../Imports/footer.php';
?>