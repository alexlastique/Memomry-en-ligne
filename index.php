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
        <header id="headerAccueil" class="header">
            <nav>
                <div id="logo" class="logo">Space Memory</div>
                <input class="menu-btn" type="checkbox" id="menu-btn" />
                <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
                <input type="text" placeholder="Rechercher un Profil 🔎" class="searchProfil">
                    <ul class="menu">
                        <li><a href="index.html" >Accueil</a></li>
                        <li><a href="memory.html" >Jeu</a></li>
                        <li><a href="Score.html" >Score</a></li>
                        <li><a href="contact.html">Nous Contacter</a></li>
                        <li><a href="myAccount.html" id="LienConditionnel">Mon Espace</a></li>
                    </ul>
                </nav>
            <h1>BIENVENUE DANS NOTRE STUDIO !</h1>
        <p>Venez challenger les cerveaux les plus agiles !</p>
        <a href="memory.html" id="playButton"><button>Jouer !</button></a>
        <audio controls preload="auto" autoplay loop>
            <source src="assets/musique/MusiqueTranquille.mp3" type="audio/mpeg" />
             votre navigateur ne suporte pas l'element audio
        </audio>
        </header>
        <!--header-->
        <!--fin header-->
        <main id="mainAccueil">
            <section>
                <div id="blockImg">
                    <img src="assets/images/headerBackground.jpg" alt="montagneSpace">
                    <div id="doubleImgBlock">
                        <img src="assets/images/black-hole.avif" alt="meteore">
                        <img src="assets/images/space.webp" alt="space">
                    </div>
                
                </div>
                <div id="blockText">
                    <div>
                        <h3>01</h3>
                        <div>
                            <h4>Les règles :</h4>
                        <p>Toutes les cartes sont étalées faces cachées sur la table. Le premier joueur retourne deux cartes. Si les images sont identiques, il gagne la paire constituée et rejoue. Si les images sont différentes, il les repose faces cachées là où elles étaient et c'est au joueur suivant de jouer.</p>
                        </div>
                    </div>
                    <div> 
                        <h3>02</h3>
                        <div>
                            <h4>L'espace.</h4>
                            <p>L'espace, un univers infini de galaxies, étoiles, et planètes, est régi par les lois de la physique. Notre système solaire, avec le Soleil et ses planètes, appartient à la Voie lactée.</p>
                        </div>
                    </div>
                    <div>
                        <h3>03</h3>
                        <div>
                            <h4>Pourquoi L'espace ?</h4>
                            <p>Nous avons choisi le thème de l'espace car c'est passionant et car c'est un thème qui fait rever par son infinité et sa beauté</p>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <img src="assets/images/galaxy.jpeg" alt="galaxy">
                <div>
                    <article>
                        <h5>310</h5>
                        <p>Parties Jouées</p>
                    </article>
                    <article>
                        <h5>1020</h5>
                        <p>Joueurs Connectés</p>
                    </article>
                    <article>
                        <h5>10 sec</h5>
                        <p>Temps Record</p>
                    </article>
                    <article>
                        <h5>21 300</h5>
                        <p>Joueurs Inscrits</p>
                    </article>
                </div>
            </section>
            <section>
                <h2>Notre Équipe</h2>
                <p>Voici l'Équipe qui a travaillé sur le projet space Memory</p>
                <img src="assets/images/signe.png" alt="signe">
                <div id="blockArticle">
                    <article class="hoverPerso">
                        <div id="alexis" class="imgTeam">
                        </div>
                        <h6>Alexis</h6>
                        <p>Game developper</p>
                        <div>
                            <img src="assets/images/Facebook.png" alt="Facebook">
                            <img src="assets/images/twitter-128.png" alt="twitter">
                            <img src="assets/images/pinterest.jpeg" alt="pinterest">
                        </div>
                    </article>
                    <article>
                        <div id="mathias" class="imgTeam">
                        </div>
                        <h6>Mathias</h6>
                        <p>Database Analyse</p>
                        <div>
                            <img src="assets/images/Facebook.png" alt="Facebook">
                            <img src="assets/images/twitter-128.png" alt="twitter">
                            <img src="assets/images/pinterest.jpeg" alt="pinterest">
                        </div>
                    </article>
                    <article>
                        <div id="leo" class="imgTeam">
                        </div>
                        <h6>Léo</h6>
                        <p>Web developper</p>
                        <div>
                            <img src="assets/images/Facebook.png" alt="Facebook">
                            <img src="assets/images/twitter-128.png" alt="twitter">
                            <img src="assets/images/pinterest.jpeg" alt="pinterest">
                        </div>
                    </article>
                </div>
            </section>
        </main>
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
                    <li><a href="memory.html" > Jouer !</a></li>
                    <li><a href="Scores.html" > Les scores</a></li>
                    <li><a href="contact.html" > Nous contacter</a></li>
                </ul>
                <a href="#headerAccueil"><button class="upButton"></button></a>
            </article>
        </footer>
        <!--fin footer-->

    </body>
</html>