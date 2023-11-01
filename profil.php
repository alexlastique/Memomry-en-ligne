<!DOCTYPE html>
<html>
    <?php
        require_once 'utils/common.php';
        require_once SITE_ROOT.'utils/database.php';
        require_once SITE_ROOT.'partials/head.php';
    ?>
    <body class="contact">
        <header class="login header">
            <?php
                require_once SITE_ROOT.'partials/header.php';
            ?>
            <h2 class="connexion">Profil</h2>
        </header>
        <h2>Joueur Teste</h2>
        <table class="PageScores">
            <tr>
                <th>Record du Joueur</th>
                <th>Niveau de Difficulté</th>
                <th>Date et Heure de la Partie</th>
            </tr>
            <tr>
                <td>1000</td>
                <td>Facile</td>
                <td>2023-10-17 14:30:00</td>
            </tr>
            <tr>
                <td>750</td>
                <td>Moyen</td>
                <td>2023-10-16 20:15:00</td>
            </tr>
            <tr>
                <td>5000</td>
                <td>Difficile</td>
                <td>2023-10-15 10:45:00</td>
            </tr>
        </table>
        <!--footer-->
        <footer class="footer">
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
                <a href="#backgroundHeader"><button class="upButton"></button></a>
            </article>
        </footer>
        <!--fin footer-->
    </body>
</html>