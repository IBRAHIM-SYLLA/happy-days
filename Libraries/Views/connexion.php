<?php
session_start();
require_once '../Controllers/connexion.php';
include_once '../Imports/header.php';
?>

<form class="info-form" action="" method="post">
    <legend>Connexion</legend>
    
    <div class="tab final-step">
        <p class="sub-text">Entrez vos identifiants</p>

        <div class="field">
            <label for="email"><span class="required-symbol">-</span> Email</label>
            <input type="text" name="email" id="" placeholder="email@mail.com" required>
        </div>      
        
        <div class="field">
            <label for="password"><span class="required-symbol">-</span> Mot de passe</label>
            <input type="text" name="password" id="" placeholder="Mot de passe" required>
        </div>

        <p class="connexion-suggestion">Vous n'avez pas encore de compte ? <a href="inscription.php">Inscrivez-vous</a></p>
        
            <button id="register" type="submit" name="register" class="icon-btn">Se connecter</button>
        
    
        <!-- <div style="overflow:auto;">
            <button type="submit" id="privBtn" name="connect" class="icon-btn"></button>
            <button type="submit" id="nextBtn" name="connect" class="icon-btn"></button>
        </div> -->
    
        <div style="text-align:center; margin-top:40px;" id="step-cont"></div>
    </div>

</form>

<?php include_once '../Imports/footer.php';
?>