<?php 
require_once '../Controllers/user.php'; 
include_once '../Imports/header.php';
?>


<form class="info-form" action="" method="post">
    <legend>Inscription</legend>

    <div class="tab">
        <div class="field">
            <label for="civility">Civilité</label>
            <select name="civility" id="">
                <option value="choisir">Choisir une option</option>
                <option value="homme">Homme</option>
                <option value="femme">Femme</option>
            </select>
        </div>


        <div class="field">
            <label for ="firtname">Nom</label>
            <input id="firstname" type="text" name="firstname" placeholder="Dupont" />
        </div>

        <div class="field">
            <label for ="lastname">Prénom</label>
            <input id="lastname" type="text" name="lastname" placeholder="Jean" autocomplete="off">
        </div>
    </div>

    <div class="tab">
        <div class="field">
            <label for ="adress">Adresse</label>
            <input id="adress" type="text" name="adress" placeholder="1, Rue Victor Hugo" autocomplete="off">
        </div>

        <div class="field">
            <label for ="zip_code">Code postal</label>
            <input id="zip_code" type="text" name="zip_code" placeholder="01234" />
        </div>

        <div class="field">
            <label for ="city">Ville</label>
            <input id="city" type="text" name="city" placeholder="Quelque-part" />
        </div>
    </div>

    <div class="tab">
        <div class="field">
            <label for ="phone_number">N° de téléphone</label>
            <input id="phone_number" type="text" name="phone_number" placeholder="01.23.45.67.89" />
        </div>

        <div class="field">
            <label for ="email">Email</label>
            <input id="email" type="text" name="email" placeholder="email@mail.com" autocomplete="off">
        </div>

        <div class="field">
            <label for ="password">Mot de passe</label>
            <input id="password" type="password" name="password" placeholder="Mot de passe" />
        </div>

        <div class="field">
            <label for ="password_conf">Confirmez le mot de passe</label>
            <input id="password_conf" type="password" name="password_conf" placeholder="Confirmez le mot de passe" />
        </div>
    </div>

    <div id="hide-until-done">
        <button id="register" type="submit" name="register">Créer un compte</button>    
    </div>
    
    <p>Vous avez déjà un compte ? <br><a href="connexion.php">Connectez vous</a></p>
    
    <?php 
    if(isMobile()) {
    ?>
        <div style="overflow: auto;">
            <button type="button" id="prevBtn" class="icon-btn"></button>

            <button type="button" id="nextBtn" class="icon-btn"></button>
        </div>

        <div style="text-align:center; margin-top:40px;">
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
        </div>
    <?php } ?>

</form>

<?php include_once '../Imports/footer.php'; ?>