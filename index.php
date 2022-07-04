<?php
require_once('./Libraries/Imports/header-index.php');

session_start();

if (isset($_POST['deconnex'])){
    session_destroy();
    header('Location: connexion.php');
}

var_dump($_SESSION) ?>
<a href="./Libraries/Views/inscription.php">inscription</a>
<a href="./Libraries/Views/connexion.php">connexion</a>
<form action="" method="post">
    <button type="submit" name='deconnex'>deconnexion</button>
</form>

<p>
    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia veniam neque ad, reiciendis, consequatur nihil cumque sapiente dicta laboriosam eaque hic voluptatum accusantium? Ducimus ipsa harum ipsam nostrum accusantium deleniti.
</p>

<div class="slider">
    <img src="" alt="" class="slider-img">
    <img class="slider-img slider-img-front" src="" alt="">
    <img src="" alt="" class="slider-img">
    
    <div id="prev" onclick="changeSlide(-1)"><</div>
    <div id="next" onclick="changeSlide(1)">></div>
</div>

<?php require_once('./Libraries/Imports/footer-index.php') ?>