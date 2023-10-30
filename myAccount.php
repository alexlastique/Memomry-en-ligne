<!DOCTYPE html>
<html>
    <head>
        <title>Space memory</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="assets/css/normalize.css">
        <link rel="stylesheet" href="assets/css/footer.css">
        <link rel="stylesheet" href="assets/css/header.css">
        <link rel="stylesheet" href="assets/css/main.css">

    </head>
    <body>
        <header class="login header">
            <div id="backgroundHeader">
                <nav>
                    <div id="logo" class="logo">Space Memory</div>
                    <input class="menu-btn" type="checkbox" id="menu-btn" />
                    <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
                    <input type="text" placeholder="Rechercher un Profil 🔎" class="searchProfil">
                    <ul class="menu">
                        <li><a href="index.php" >Accueil</a></li>
                        <li><a href="games/memory/memory.php" >Jeu</a></li>
                        <li><a href="games/memory/Score.php" >Score</a></li>
                        <li><a href="contact.php">Nous Contacter</a></li>
                        <li><a href="#" id="LienConditionnel">Mon Espace</a></li>
                    </ul>
                </nav>
            </div>
            <audio controls preload="auto" autoplay loop>
                <source src="assets/musique/MusiqueTranquille.mp3" type="audio/mpeg" />
                 votre navigateur ne suporte pas l'element audio
            </audio>
            <h2 class="connexion">Mon Espace</h2>
        </header>
        <main id="mainAccount">
            <section>
                <h2>Alexis</h2>
                <img class="rounded-circle mt-5" width="150px" src="assets/images/alexis.jpg">
            </section>
            <form action="">
                <fieldset>
                    <h3>Changer l'adresse email</h3>
                    <input type="email" placeholder=" &nbsp; Ancien email">
                    <input type="pseudo" placeholder=" &nbsp; Nouveau email">
                    <input type="password" placeholder=" &nbsp; Mot de passe">
                    <input type="submit" value=" &nbsp; Changer l'adresse mail" class="SubmitEspace">
                </fieldset>
                <fieldset>
                    <h3>Changer le mot de passe</h3>
                    <input type="password" placeholder=" &nbsp; Ancien mot de passe">
                    <input type="password" placeholder=" &nbsp; Nouveau mot de passe">
                    <input type="password" placeholder=" &nbsp; Confirmer le mot de passe">
                    <input type="submit" value=" &nbsp; Changer le mot de passe" class="SubmitEspace">
                </fieldset>
            </form>
        </main>
            <!-- <div class="alignProfil">
            <table class="TableauProfil">
                <tr>
                    <td class="Profil20">
                        <img src="assets/images/alexis.jpg" alt="">
                    </td>
                    <td class="Profil40">
                        <form action="POST" class="formEspace">
                            <input type="email" placeholder="Ancien email">
                            <input type="pseudo" placeholder="Nouveau email">
                            <input type="password" placeholder="Mot de passe">
                            <input type="submit" value="Changer l'adresse mail" class="SubmitEspace">
                        </form>
                    </td>
                    <td class="Profil40">
                        
                    </td>
                </tr>
                <tr>
                    <td class="NomProfil">Alexlastique</td>
                </tr>
            </table> -->
            <!-- <form class="formEspace">
                <p class="pEspace"><input type="email" placeholder="Ancien email"></p>
                <p class="pEspace"><input type="pseudo" placeholder="Nouveau email"></p>
                <p class="pEspace"><input type="password" placeholder="Mot de passe"></p>
                <p class="pEspace"><input type="submit" value="Changer l'adresse mail" class="SubmitEspace"></p>
            </form>
            <form class="formEspace2">
                <p class="pEspace2"><input type="password" placeholder="Ancien mot de passe"></p>
                <p class="pEspace2"><input type="password" placeholder="Nouveau mot de passe"></p>
                <p class="pEspace2"><input type="password" placeholder="Confirmer le mot de passe"></p>
                <p class="pEspace2"><input type="submit" value="Changer le mot de passe" class="SubmitEspace"></p>
            </form> -->

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
                    <li><a href="games/memory/memory.php" > Jouer !</a></li>
                    <li><a href="games/memory/Scores.php" > Les scores</a></li>
                    <li><a href="contact.php" > Nous contacter</a></li>
                </ul>
                <a href="#backgroundHeader"><button class="upButton"></button></a>
            </article>
        </footer>
        <!--fin footer-->
    </body>
</html>