</main>

<footer>
    <div id="myLinks">
        <div id="left-links">
            <?php if(!empty($_SESSION)) { ?>
                <a href="./Libraries/Views/deconnexion.php">Deco</a>
                <a href="./Libraries/Views/profil.php"><img src="./Libraries/Style/Icons/avatar.png" alt=""></a>
            <?php } else { ?>
                <a href="./Libraries/Views/connexion.php"><img src="./Libraries/Style/Icons/login.png" alt=""></a>
                <a href="./Libraries/Views/inscription.php"><img src="./Libraries/Style/Icons/add-user.png" alt=""></a>
            <?php } ?>
        </div>
        <button class="icon-btn" id="burger-btn" onclick="showNav()"></button>
        <div id="right-links">
            <a href="./Libraries/Views/adherer.php"><img src="./Libraries/Style/Icons/star.png" alt=""></a>
            <a href="./Libraries/Views/contact.php"><img src="./Libraries/Style/Icons/support.png" alt=""></a>
        </div>
    </div>

    <div class="contact-us">
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
</footer>
    
</body>
</html>