<?php
require_once '../Controllers/profil.php';
require_once '../Imports/header.php';
var_dump($dataUser[0]);
?>
<section id="profil">
    <h1 id="title">Votre profil</h1>
    <a href="../../index.php" class="back-btn">Retour</a>
    <form action="" method="post">
        <div class="field">        
            <label for ="email">Email</label>
            <input id="email" type="text" name="email" value="<?= $dataUser[0]['email'] ?>" autocomplete="off">
        </div>
        <div class="field">        
            <label for ="password">Mot de passe</label>
            <input id="password" type="password" name="password" placeholder="*********" />
        </div>
        <div class="field">        
            <label for ="password_conf">Confirmation</label>
            <input id="password_conf" type="password" name="password_conf" placeholder="Confirmez le mot de passe" />
        </div>
        <div class="field">
            <label for ="adress">Adresse</label>
            <input id="adress" type="text" name="adress" value="<?= $dataUser[0]['adress'] ?>" autocomplete="off">
        </div>
        <div class="field">
            <label for ="zip_code">Code postal</label>
            <input id="zip_code" type="text" name="zip_code" value="<?= $dataUser[0]['zip_code'] ?>" />
        </div>
        <div class="field">
            <label for ="city">Ville</label>
            <input id="city" type="text" name="city" value="<?= $dataUser[0]['city'] ?>"/>
        </div>
        <div class="field">
            <label for ="phone_number">N° de téléphone</label>
            <input id="phone_number" type="text" name="phone_number" value="<?= $dataUser[0]['phone_number'] ?>" />
        </div>

        <button id="update" type="submit" name="update">Mettre a jour</button>
    </form>

    <?php if($dataUser[0]['id_right'] == '2022'): ?>
        <div id="admin">
            <h2>Vous possédez les droits d'administrateur</h2>
            <a href="./admin.php">Espace Admin</a>
        </div>
    <?php endif; ?>
</section>
<?php 
require_once "../Imports/footer.php";
?>