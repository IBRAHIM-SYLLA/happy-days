<?php
require_once('./Libraries/Imports/header-index.php');

session_start();

if(isset($_POST['deconnex'])) {
    session_destroy();
    header('Location: ./Libraries/Views/connexion.php');
}
?>

<div class="presentation">
    <h1>Titre</h1>
    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia veniam neque ad, reiciendis, consequatur nihil cumque sapiente dicta laboriosam eaque hic voluptatum accusantium? Ducimus ipsa harum ipsam nostrum accusantium deleniti.
</div>

<div class="slider" data-carousel>
    <div id="img-cont" data-slides>
    </div>
    
    <button id="prev" class="slider-btn"></button>
    <button id="next" class="slider-btn"></button>
</div>


<a href="./Libraries/Views/inscription.php">inscription</a>
<a href="./Libraries/Views/connexion.php">connexion</a>
<a href="./Libraries/Views/testmail.php">Mail</a>
<?php if(!empty($_SESSION)): ?>
<a href="./Libraries/Views/profil.php">Mon Profil</a>
    <?php endif; ?>
<form action="" method="post">
    <button type="submit" name='deconnex'>deconnexion</button>
</form>


<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2902.074457316354!2d5.400428815487414!3d43.33363097913347!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12c9bf8dc8c7fc3d%3A0x3a717d2ff0f7e870!2sAv.%20Alexandre%20Ansaldi%2C%20Marseille!5e0!3m2!1sfr!2sfr!4v1657531266670!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

<?php 
var_dump($_SESSION);
require_once('./Libraries/Imports/footer-index.php') 
?>