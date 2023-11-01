<!DOCTYPE html>
<html>
    <?php
        require_once 'utils/common.php';
        require_once SITE_ROOT.'partials/head.php';
        require_once SITE_ROOT . 'utils/database.php';
        $passwordPattern = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$._%^&*]).{8,}$/'; 
        $pseudoPattern = '/^.{4,}$/'; 
        $ValidityConnection ="";


        if (isset($_POST['RegisterEmail']) && isset($_POST['RegisterPseudo']) && isset($_POST['RegisterPassword']) && isset($_POST['RegisterPassword2'])) {
                $RegisterEmail = $_POST['RegisterEmail'];
                $RegisterPseudo = $_POST['RegisterPseudo'];
                $RegisterPassword = $_POST['RegisterPassword'];
                $RegisterPassword2 = $_POST['RegisterPassword2'];
                if(preg_match($passwordPattern, $RegisterPassword) && preg_match($passwordPattern, $RegisterPassword2) && preg_match($pseudoPattern, $RegisterPseudo)){
                    if (!filter_var($RegisterEmail, FILTER_VALIDATE_EMAIL)) {
                        throw new Exception("Le format de l'email n'est pas valide");
                    }
                    else{
                        if($RegisterPassword == $RegisterPassword2){
                            $HashPassword = hash(
                                'sha512',
                                 $RegisterPassword
                            );
                            $pdo = connectToDbAndGetPdo();
                            $pdoStatement = $pdo->prepare("INSERT INTO Utilisateur (Email, PasswordUser, Pseudo)
                            VALUES
                                ('$RegisterEmail', '$HashPassword', '$RegisterPseudo')");
                            $pdoStatement->execute();
                            $ValidityConnection = "Inscription effectuer";
                        }
                    }
                }

        }
    ?>
    <body>
        <header class="login header">
            <?php
                require_once SITE_ROOT.'partials/header.php';
            ?>
            <h2 class="connexion">Inscription</h2>
        </header>
        <form class="divInput" method="post">
            <p class="pInput"><input name="RegisterEmail" type="email" placeholder="Email"></p>
            <p class="pInput"><input name="RegisterPseudo" type="pseudo" placeholder="Pseudo"></p>
            <p class="pInput"><input name="RegisterPassword" type="password" placeholder="Mot de passe"></p>
            <p class="pInput"><input name="RegisterPassword2" type="password" placeholder="Confirmer le mot de passe"></p>
            <p class="pInput"><input type="submit" value="Inscription" class="Submit"></p>
            <?php echo $ValidityConnection?>
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