</main>

<footer>
    <div id="myLinks">
        <div id="left-links">
            <?php if(!empty($_SESSION)) { ?>
                <form action="" method="post">
                    <button type="submit" name="deconnex"></button>
                </form>
                <a href="../Views/profil.php"><img src="../Style/Icons/avatar.png" alt=""></a>
            <?php } else { ?>
                <a href="../Views/connexion.php"><img src="../Style/Icons/login.png" alt=""></a>
                <a href="../Views/inscription.php"><img src="../Style/Icons/add-user.png" alt=""></a>
            <?php } ?>
        </div>
        <button class="icon-btn" id="burger-btn" onclick="showNav()"></button>
        <div id="right-links">
            <a href="../Views/adherer.php"><img src="../Style/Icons/star.png" alt=""></a>
            <a href="../Views/contact.php"><img src="../Style/Icons/support.png" alt=""></a>
        </div>
    </div>
</footer>

</body>
</html>