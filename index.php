<?php
require_once('./Libraries/Imports/header-index.php');

if(isset($_POST['deconnex'])) {
    session_destroy();
    header('Location: ./Libraries/Views/connexion.php');
}
?>

<div class="presentation">
    <div class="lines-around">
        <span class="line"></span>
        <h1>Qui sommes-nous ?</h1>
        <span class="line"></span>
    </div>
    <p>
        HappyDay est une association loi 1901 basée dans le 14eme arrondissement de Marseille.
    Elle compte aussi à son actif 25 bénévoles actifs issus de différents secteurs (géographique,
    professionnel, social) unis pour faire fonctionner le collectif et apporter une plus-value
    nécessaire afin d’aller toujours plus loin dans nos projets.
    <br><br>

    Le siège se trouve dans le 14ème arrondissement mais nos actions sont menées même au-
    delà de ce secteur (13ème le 15ème et le 3ème arrondissement par exemple, ou La Cadière
    d’Azur récemment). 
    Nous intervenons où le public ados-adulte demande notre sollicitation et
    organisons de manière prompte et efficace des événements sportifs et animations qui nous
    sont propres de qualité. Nous souhaitons permettre à notre public de passer une journée
    agréable, sous couvert de bonne humeur, convivialité et partage lorsqu’il prend part à l’un de
    nos évènements. 
    <br><br>
    
    <b>
    Nous avons pour ambition d’être un créateur de bonheur, d’évasion, de
    dynamisme dans ces secteurs de la ville qui sont malheureusement souvent mis à l’écart.
    </b>
    </p>
</div>

<div class="slider" data-carousel>
    <div id="img-cont" data-slides>
    </div>
    
    <button id="prev" class="slider-btn"></button>
    <button id="next" class="slider-btn"></button>
</div>

<div class="presentation">
    <div class="lines-around">
        <span class="line"></span>
        <h1>Nos vocations</h1>
        <span class="line"></span>
    </div>
    <p>
        Nous souhaitons mettre en avant le vivre ensemble par le biais du sport. Pour y parvenir,
    nous mettons en place des évènements (tournoi, rencontres, rassemblements) durant
    lesquels nous partageons les valeurs qui nous tiennent à cœur :
    <ul>
        <li>Entraide</li>
        <li>Partage</li>
        <li>Bonne humeur</li>
        <li>Respect de soi et d'autrui</li>
        <li>Convivialité</li>
        <li>Rigueur</li>
        <li>Volonté d'amélioration</li>
        <li>Authenticité</li>
        <li>Optimisme</li>
    </ul>
    </p>
</div>

<div class="presentation">
    <div class="lines-around">
        <span class="line"></span>
        <h1>Nos actions</h1>
        <span class="line"></span>
    </div>
    <p style="text-align: center; font-size: 22px;"><a href="./Libraries/Views/events.php">Voir nos évènements !</a></p>
</div>

<div class="presentation">
    <div class="iframe-cont">
        <div class="lines-around">
            <span class="line"></span>
            <h1>Où nous trouver ?</h1>
            <span class="line"></span>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2902.074457316354!2d5.400428815487414!3d43.33363097913347!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12c9bf8dc8c7fc3d%3A0x3a717d2ff0f7e870!2sAv.%20Alexandre%20Ansaldi%2C%20Marseille!5e0!3m2!1sfr!2sfr!4v1657531266670!5m2!1sfr!2sfr" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>

<div class="presentation contact-us">
    <div class="lines-around">
        <span class="line"></span>
        <h1>Nos réseaux</h1>
        <span class="line"></span>
    </div>
    <ul>
        <li id="fb-icon">
            <a href="">facebook</a>
        </li>
        <li id="ig-icon">
            <a href="">instagram</a>
        </li>
        <li id="li-icon">
            <a href="">linkedin</a>
        </li>
    </ul>

    <h1><a href="./Libraries/Views/contact.php">Nous contacter</a></h1>    
</div>


<?php 
// var_dump($_SESSION);
require_once('./Libraries/Imports/footer-index.php') 
?>