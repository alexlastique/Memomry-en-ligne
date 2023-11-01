<?php
$MaPage=($_SERVER['REQUEST_URI']);
$IdUser = $_SESSION['userId'];
$pdo = connectToDbAndGetPdo();
$pdoStatement = $pdo->prepare("SELECT Pseudo FROM Utilisateur
WHERE Id = '$IdUser';");
$pdoStatement->execute();
$PseudoUser = $pdoStatement->fetch();
?>

<?php if ($MaPage != "/Projet-Flash/index.php"): ?>
    
    <div id="backgroundHeader">
                    <nav>
                        <div id="logo" class="logo">Space Memory</div>
                        <input class="menu-btn" type="checkbox" id="menu-btn" />
                        <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
                        <!-- <input type="text" placeholder="Rechercher un Profil 🔎" class="searchProfil"> -->
                        <ul class="menu">
                            <li><a href="<?=PROJECT_FOLDER?>index.php" >Accueil</a></li>

                            <li><a style="color: <?=$MaPage == "/Projet-Flash/games/memory/index.php" ? "orange" : "";?>;" href="<?=PROJECT_FOLDER?>games/memory/index.php" >Jeu</a></li>
                            
                            <li><a style="color: <?=$MaPage == "/Projet-Flash/games/memory/Score.php" ? "orange" : "";?>;" href="<?=PROJECT_FOLDER?>games/memory/Score.php" >Score</a></li>
                            
                            <li><a style="color: <?=$MaPage == "/Projet-Flash/contact.php" ? "orange" : "";?>;" href="<?=PROJECT_FOLDER?>contact.php">Nous Contacter</a></li>

                            <li><a style="color: <?=$MaPage == "/Projet-Flash/myAccount.php" ? "orange" : "";?>;" href="#" id="LienConditionnel">Mon Espace(<?=$PseudoUser->Pseudo?>)</a></li>
                        </ul>
                    </nav>
                </div>
                <audio controls preload="auto" autoplay loop>
                    <source src="<?=PROJECT_FOLDER?>assets/musique/<?=$MaPage == "/Projet-Flash/games/memory/index.php" ? "MusiqueAction.mp3" : "MusiqueTranquille.mp3";?>" type="audio/mpeg" />
                    votre navigateur ne suporte pas l'element audio
                </audio>

<?php else: ?>

    <nav>
                <div id="logo" class="logo">Space Memory</div>
                <input class="menu-btn" type="checkbox" id="menu-btn" />
                <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
                <!-- <input type="text" placeholder="Rechercher un Profil 🔎" class="searchProfil"> -->
                    <ul class="menu">
                        <li><a style="color: orange;" href="<?=PROJECT_FOLDER?>index.php" >Accueil</a></li>
                        <li><a href="<?=PROJECT_FOLDER?>games/memory/index.php" >Jeu</a></li>
                        <li><a href="<?=PROJECT_FOLDER?>games/memory/Score.php" >Score</a></li>
                        <li><a href="<?=PROJECT_FOLDER?>contact.php">Nous Contacter</a></li>
                        <li><a href="<?=PROJECT_FOLDER?>myAccount.php" id="LienConditionnel">Mon Espace(<?=$PseudoUser->Pseudo?>)</a></li>
                    </ul>
                </nav>
            <h1>BIENVENUE DANS NOTRE STUDIO !</h1>
        <p>Venez challenger les cerveaux les plus agiles !</p>
        <a href="games/memory/index.php" id="playButton"><button>Jouer !</button></a>
        <audio controls preload="auto" autoplay loop>
            <source src="assets/musique/MusiqueTranquille.mp3" type="audio/mpeg" />
             votre navigateur ne suporte pas l'element audio
        </audio>

<?php endif; ?>