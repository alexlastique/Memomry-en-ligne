<header class="header login"> 
    <div id="backgroundHeader">
        <nav>
            <div id="logo" class="logo">Space Memory</div>
            <input class="menu-btn" type="checkbox" id="menu-btn" />
            <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
            <input type="text" placeholder="Rechercher un Profil 🔎" class="searchProfil">
            <ul class="menu">
                <li><a href="<?=PROJECT_FOLDER?>index.php" >Accueil</a></li>
                <li><a href="<?=PROJECT_FOLDER?>games/memory/index.php" >Jeu</a></li>
                <li><a href="<?=PROJECT_FOLDER?>games/memory/Score.php" >Score</a></li>
                <li><a href="<?=PROJECT_FOLDER?>contact.php">Nous Contacter</a></li>
                <li><a href="#" id="LienConditionnel">Mon Espace</a></li>
            </ul>
        </nav>
    </div>
    <audio controls preload="auto" autoplay loop>
        <source src="<?=PROJECT_FOLDER?>assets/musique/MusiqueTranquille.mp3" type="audio/mpeg" />
            votre navigateur ne suporte pas l'element audio
    </audio>
    <h2 class="connexion">Explorez l'univers du Memory Spatial</h2>
</header>