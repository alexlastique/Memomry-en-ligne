<!DOCTYPE html>
<html>
    <?php
        require_once 'utils/common.php';
        require_once SITE_ROOT.'utils/database.php';
        require_once SITE_ROOT.'partials/head.php';
        $ValidityConnection ="";


        if (isset($_POST['LoginEmail']) && isset($_POST['LoginPassword'])) {
            $LoginEmail = $_POST['LoginEmail'];
            $LoginPassword = $_POST['LoginPassword'];
            $HashPassword = hash(
                'sha512',
                $LoginPassword
            );
            $pdo = connectToDbAndGetPdo();
            $pdoStatement = $pdo->prepare("SELECT Id, PasswordUser FROM Utilisateur
            WHERE Email = '$LoginEmail';");
            $pdoStatement->execute();
            $Login = $pdoStatement->fetchAll();
        }
    ?>
    <body>
        <header class="login header">
            <?php
                require_once SITE_ROOT.'partials/header.php';
            ?>
            <h2 class="connexion">Login</h2>
        </header>
        <form class="divInput" method="post">
            <p class="pInput"><input name="LoginEmail" type="email" placeholder="Email"></p>
            <p class="pInput"><input name="LoginPassword" type="password" placeholder="Mot de passe"></p>
            <p class="pInput"><input type="submit" value="Connexion" class="Submit"></p>
            <?php if(!empty($Login)):?>
            <?php foreach($Login as $user){
                if ($user->PasswordUser==$HashPassword){
                    $_SESSION['userId'] = $user->Id;
                }
            }
            header('Location: index.php');?>
            <?php endif?>
            <p class="pInput2">Pas encore de compte ? Créer en un <a href="register.php" style="color: orange;">ici</a></p>
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
                <a href="#backgroundHeader"><button class="upButton"></button></a>
            </article>
        </footer>
        <!--fin footer-->

    </body>
</html>