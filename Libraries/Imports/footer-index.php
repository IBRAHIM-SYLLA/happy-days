</main>

<footer>
    <div id="myLinks">
        <div id="left-links">
            <?php if(isset($_SESSION)) { ?>
                <button type="submit" name="deconnex"></button>
                <a href="./Libraires/Views/profil.php"><img src="./Libraries/Style/Icons/avatar.png" alt=""></a>
            <?php } else { ?>
                <a href="./Libraires/Views/connexion.php"><img src="./Libraries/Style/Icons/login.png" alt=""></a>
                <a href="./Libraires/Views/inscription.php"><img src="./Libraries/Style/Icons/add-user.png" alt=""></a>
            <?php } ?>
        </div>
        <button class="icon-btn" id="burger-btn" onclick="showNav()"></button>
        <div id="right-links">
            <a href="./Libraries/Views/adherer.php"><img src="./Libraries/Style/Icons/star.png" alt=""></a>
            <a href="./Libraries/Views/contact.php"><img src="./Libraries/Style/Icons/support.png" alt=""></a>
        </div>
    </div>
</footer>
    
</body>
</html>