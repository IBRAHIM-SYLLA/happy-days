<?php
require_once('./Libraries/Imports/header-index.php');

session_start();

if (isset($_POST['deconnex'])){
    session_destroy();
    header('Location: ./Libraries/Views/connexion.php');
}

var_dump($_SESSION) ?>

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
<?php if(!empty($_SESSION)): ?>
<a href="./Libraries/Views/profil.php">Mon Profil</a>
<a href="Libraries/Views/adherer.php">Adhérer</a>
<form action="" method="post">
    <button type="submit" name='deconnex'>deconnexion</button>
</form>
<?php endif; ?>

<?php require_once('./Libraries/Imports/footer-index.php') ?>