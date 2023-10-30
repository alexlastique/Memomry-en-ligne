<!DOCTYPE html>
<html>
        <?php
            require_once 'utils/common.php';
            require_once SITE_ROOT.'partials/head.php'
        ?>
    <body>
        <header class="login header">
            <?php
                require_once SITE_ROOT.'partials/header.php';
            ?>
            <h2 class="connexion">Inscription</h2>
        </header>
        <form class="divInput">
            <p class="pInput"><input type="email" placeholder="Email"></p>
            <p class="pInput"><input type="pseudo" placeholder="Pseudo"></p>
            <p class="pInput"><input type="password" placeholder="Mot de passe"></p>
            <p class="pInput"><input type="password" placeholder="Confirmer le mot de passe"></p>
            <p class="pInput"><input type="submit" value="Inscription" class="Submit"></p>
            <p class="pInput2" >Déjà un compte ? Connecte-toi <a href="login.php" style="color: orange;">ici</a></p>
        </form>

        <!--footer-->
        <footer id="footerAccueil">
            <article>
                <h4>Information</h4>
                <p>N'hésiter pas à  nous contacter pour le moindre problème</p>
                <p><span>Tel : </span> 06 05 04 03 02</p>
                <p><span>Email : </span> support@powerofmemory.com</p>
                <p><span>Location : </span> Paris</p>
                <div>
                    <img src="assets/images/Facebook.png" alt="Facebook" id="facebook">
                    <img src="assets/images/twitter-128.png" alt="twitter">
                    <img src="assets/images/G-logo.png" alt="twitter">
                    <img src="assets/images/pinterest2.png" alt="pinterest" id="pinterest">
                    <img src="assets/images/instagram.png" alt="twitter">
                </div>
                <p>Copyright © 2022 Tous droits réservés</p>
            </article>
            <article>
                <h4>Space Memory</h4>
                <ul>
                    <li><a href="games/memory/index.php" > Jouer !</a></li>
                    <li><a href="games/memory/Scores.php" > Les scores</a></li>
                    <li><a href="contact.php" > Nous contacter</a></li>
                </ul>
                <button class="upButton"><a href="#backgroundHeader">^</a></button>
            </article>
        </footer>
        <!--fin footer-->
    </body>
</html>