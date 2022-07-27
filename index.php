<?php
require_once('./Libraries/Imports/header-index.php');

session_start();

if(isset($_POST['deconnex'])) {
    session_destroy();
    header('Location: ./Libraries/Views/connexion.php');
}
?>

<div class="presentation">
    <h1>Qui sommes-nous ?</h1>
    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia veniam neque ad, reiciendis, consequatur nihil cumque sapiente dicta laboriosam eaque hic voluptatum accusantium? Ducimus ipsa harum ipsam nostrum accusantium deleniti.
</div>

<div class="slider" data-carousel>
    <div id="img-cont" data-slides>
    </div>
    
    <button id="prev" class="slider-btn"></button>
    <button id="next" class="slider-btn"></button>
</div>

<div class="presentation">
    <h1>Nos actions</h1>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit asperiores distinctio, modi ipsam, maxime earum eligendi ea perspiciatis numquam qui eaque neque. Hic animi doloremque debitis, inventore aliquam obcaecati illum.
</div>

<div class="presentation">
    <h1>Notre équipe</h1>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto fugiat, nam delectus dolorum eligendi corporis numquam hic! Omnis eos quia est doloremque provident nostrum quae iste, expedita cupiditate. Numquam, sit!
</div>

<div class="presentation">
    <div class="iframe-cont">
        <h1>Où nous trouver ?</h1>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2902.074457316354!2d5.400428815487414!3d43.33363097913347!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12c9bf8dc8c7fc3d%3A0x3a717d2ff0f7e870!2sAv.%20Alexandre%20Ansaldi%2C%20Marseille!5e0!3m2!1sfr!2sfr!4v1657531266670!5m2!1sfr!2sfr" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>

<div class="presentation contact-us">
    <h1>Nous contacter</h1>
    <ul>
        <li id="phone-icon">
            <a href="tel:+331.23.45.67.89">01.23.45.67.89</a>
        </li>
        <li id="mail-icon">
            <a href="mailto:example@mail.com">example@mail.com</a>
        </li>
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
</div>


<?php 
// var_dump($_SESSION);
require_once('./Libraries/Imports/footer-index.php') 
?>