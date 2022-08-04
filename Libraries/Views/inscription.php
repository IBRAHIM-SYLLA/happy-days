<?php 
require_once '../Imports/header.php';
require_once '../Controllers/user.php'; 
?>


<section id="inscription">
<form class="info-form" action="inscription.php" method="post">
    <legend>Inscription</legend>
        <h4 class="err-msg"><?= $error ?></h4>
    <div class="tab">
        <p class="sub-text">Parlez-nous un peu de vous...</p>
        <div class="field">
            <label for="civility"><span class="required-symbol">-</span> Civilité</label>
            <select name="civility" id="" required>
                <option value="choisir">Choisir une option</option>
                <option value="homme">Homme</option>
                <option value="femme">Femme</option>
            </select>
        </div>


        <div class="field">
            <label for ="firtname"><span class="required-symbol">-</span> Nom</label>
            <input id="firstname" type="text" name="firstname" placeholder="Dupont" required/>
        </div>

        <div class="field">
            <label for ="lastname"><span class="required-symbol">-</span> Prénom</label>
            <input id="lastname" type="text" name="lastname" placeholder="Jean" autocomplete="off"required>
        </div>
    </div>

    <div class="tab">
        <p class="sub-text">Veuillez entrer vos coordonnées (1/2)</p>
        <div class="field">
            <label for ="adress"><span class="required-symbol">-</span> Adresse</label>
            <input id="adress" type="text" name="adress" placeholder="1, Rue Victor Hugo" autocomplete="off"required>
        </div>

        <div class="field">
            <label for ="zip_code"><span class="required-symbol">-</span> Code postal</label>
            <input id="zip_code" type="number" name="zip_code" placeholder="01234" required/>
        </div>

        <div class="field">
            <label for ="city"><span class="required-symbol">-</span> Ville</label>
            <input id="city" type="text" name="city" placeholder="Quelque-part" required/>
        </div>
    </div>

    <div class="tab">
        <p class="sub-text">Veuillez entrer vos coordonnées (2/2)</p>
        <div class="field">
            <label for ="phone_number"><span class="required-symbol">-</span> N° de téléphone</label>
            <input id="phone_number" type="tel" name="phone_number" placeholder="01.23.45.67.89" required/>
        </div>

        <div class="field">
            <label for ="email"><span class="required-symbol">-</span> Email</label>
            <input id="email" type="email" name="email" placeholder="email@mail.com" autocomplete="off" required>
            <p id="mail-check"></p>
        </div>

        <div class="field">
            <label for ="password"><span class="required-symbol">-</span> Mot de passe</label>
            <input id="password" type="password" name="password" placeholder="Mot de passe" required/>
            <p id="password-check"></p>
        </div>

        <div class="field">
            <label for ="password_conf"><span class="required-symbol">-</span> Confirmez le mot de passe</label>
            <input id="password_conf" type="password" name="password_conf" placeholder="Confirmez le mot de passe" required/>
        </div>
    </div>

    <div class="tab final-step">
        <p class="sub-text">Dernière étape !</p>
        
        <button id="register" type="submit" name="register" class="icon-btn">Créer un compte</button>
    </div>

    <p class="connexion-suggestion">Vous avez déjà un compte ? <br><a href="connexion.php">Connectez vous</a></p>
    
    <div id="btn-cont" style="overflow: auto;">
        <button type="button" id="prevBtn" class="icon-btn"></button>

        <button type="button" id="nextBtn" class="icon-btn"></button>
    </div>

    <div style="text-align:center; margin-top:40px;" id="step-cont"></div>

</form>

</section>
<div class="error-cont"></div>

<?php include_once '../Imports/footer.php'; ?>