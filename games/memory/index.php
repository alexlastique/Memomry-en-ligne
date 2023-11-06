<!DOCTYPE html>
<html>
    <?php
        require_once '../../utils/common.php';
        require_once SITE_ROOT.'utils/database.php';
        require_once SITE_ROOT.'partials/head.php';
    ?>

    <body id="memory">
        <header class="header login"> 

            <?php
                require_once SITE_ROOT.'partials/header.php';
            ?>

            <h2 class="connexion">Explorez l'univers du Memory Spatial</h2>
        </header>
        <main>
            <article class="levelDifficult">
                <h3>Choisissez votre niveau de difficulté :</h3>
                <div>
                    <button id="easy">Facile</button>
                    <button id="normal">Normal</button>
                    <button id="difficile">Difficile</button>
                </div>
            </article>
            <?php require_once SITE_ROOT.'chat.php';?>
            <table class="Scores" id="TableMemory1">
                <tr>
                    <td><img src="../../assets/images/espace/black-hole.avif" alt="trou noir"></td>
                    <td><img src="../../assets/images/espace/black-hole.avif" alt="trou noir"></td>
                    <td><img src="../../assets/images/espace/black-hole.jpeg" alt="trou noir2"></td>
                    <td><img src="../../assets/images/espace/black-hole.jpeg" alt="trou noir2"></td>
                </tr>
                <tr>
                    <td><img src="../../assets/images/espace/comete1.jpeg" alt="comete"></td>
                    <td><img src="../../assets/images/espace/comete1.jpeg" alt="comete"></td>
                    <td><img src="../../assets/images/espace/constellation1.jpeg" alt="constellation"></td>
                    <td><img src="../../assets/images/espace/constellation1.jpeg" alt="constellation"></td>
                </tr>
                <tr>
                    <td><img src="../../assets/images/espace/etoile1.jpeg" alt="etoile"></td>
                    <td><img src="../../assets/images/espace/etoile1.jpeg" alt="etoile"></td>
                    <td><img src="../../assets/images/espace/etoile2.webp" alt="etoile2"></td>
                    <td><img src="../../assets/images/espace/etoile2.webp" alt="etoile2"></td>
                </tr>
                <tr>
                    <td><img src="../../assets/images/espace/galaxie1.jpeg" alt="galaxie"></td>
                    <td><img src="../../assets/images/espace/galaxie1.jpeg" alt="galaxie"></td>
                    <td><img src="../../assets/images/espace/galaxy.jpeg" alt="galaxie2"></td>
                    <td><img src="../../assets/images/espace/galaxy.jpeg" alt="galaxie2"></td>
                </tr>
            </table>
            <table class="Scores medium"  id="TableMemory2">
                <tr>
                    <td><img src="../../assets/images/espace/black-hole.avif" alt="troue noir"></td>
                    <td><img src="../../assets/images/espace/black-hole.avif" alt="troue noir"></td>
                    <td><img src="../../assets/images/espace/black-hole.jpeg" alt="troue noir2"></td>
                    <td><img src="../../assets/images/espace/black-hole.jpeg" alt="troue noir2"></td>
                    <td><img src="../../assets/images/espace/comete1.jpeg" alt="comete"></td>
                    <td><img src="../../assets/images/espace/comete1.jpeg" alt="comete"></td>
                </tr>
                <tr>
                    <td><img src="../../assets/images/espace/constellation1.jpeg" alt="constellation"></td>
                    <td><img src="../../assets/images/espace/constellation1.jpeg" alt="constellation"></td>
                    <td><img src="../../assets/images/espace/etoile1.jpeg" alt="etoile"></td>
                    <td><img src="../../assets/images/espace/etoile1.jpeg" alt="etoile"></td>
                    <td><img src="../../assets/images/espace/etoile2.webp" alt="etoile2"></td>
                    <td><img src="../../assets/images/espace/etoile2.webp" alt="etoile2"></td>
                </tr>
                <tr>
                    <td><img src="../../assets/images/espace/galaxie1.jpeg" alt="galaxie"></td>
                    <td><img src="../../assets/images/espace/galaxie1.jpeg" alt="galaxie"></td>
                    <td><img src="../../assets/images/espace/ISS1.jpeg" alt="ISS"></td>
                    <td><img src="../../assets/images/espace/ISS1.jpeg" alt="ISS"></td>
                    <td><img src="../../assets/images/espace/lune1.png" alt="lune"></td>
                    <td><img src="../../assets/images/espace/lune1.png" alt="lune"></td>
                </tr>
                <tr>
                    <td><img src="../../assets/images/espace/lune2.png" alt="lune"></td>
                    <td><img src="../../assets/images/espace/lune2.png" alt="lune"></td>
                    <td><img src="../../assets/images/espace/meteore.jpeg" alt="meteore"></td>
                    <td><img src="../../assets/images/espace/meteore.jpeg" alt="meteore"></td>
                    <td><img src="../../assets/images/espace/meteorite1.jpeg" alt="meteorite"></td>
                    <td><img src="../../assets/images/espace/meteorite1.jpeg" alt="meteorite"></td>
                </tr>
                <tr>
                    <td><img src="../../assets/images/espace/montagneSpace.jpeg" alt="montagne space"></td>
                    <td><img src="../../assets/images/espace/montagneSpace.jpeg" alt="montagne space"></td>
                    <td><img src="../../assets/images/espace/MultipleEtoile.jpeg" alt="Fond etoile"></td>
                    <td><img src="../../assets/images/espace/MultipleEtoile.jpeg" alt="Fond etoile"></td>
                    <td><img src="../../assets/images/espace/nebuleuse1.avif" alt="nebuleuse"></td>
                    <td><img src="../../assets/images/espace/nebuleuse1.avif" alt="nebuleuse"></td>
                </tr>
                <tr>
                    <td><img src="../../assets/images/espace/PillierDeLaCreation.jpeg" alt="Pillier de la creation"></td>
                    <td><img src="../../assets/images/espace/PillierDeLaCreation.jpeg" alt="Pillier de la creation"></td>
                    <td><img src="../../assets/images/espace/planete1.jpeg" alt="planet"></td>
                    <td><img src="../../assets/images/espace/planete1.jpeg" alt="planet"></td>
                    <td><img src="../../assets/images/espace/planete2.png" alt="planete2"></td>
                    <td><img src="../../assets/images/espace/planete2.png" alt="planete2"></td>
                </tr>
            </table>
            <table class="Scores hard"  id="TableMemory3">
                <tr>
                    <td><img src="../../assets/images/espace/black-hole.avif" alt="troue noir"></td>
                    <td><img src="../../assets/images/espace/black-hole.avif" alt="troue noir"></td>
                    <td><img src="../../assets/images/espace/black-hole.jpeg" alt="troue noir2"></td>
                    <td><img src="../../assets/images/espace/black-hole.jpeg" alt="troue noir2"></td>
                    <td><img src="../../assets/images/espace/comete1.jpeg" alt="comete"></td>
                    <td><img src="../../assets/images/espace/comete1.jpeg" alt="comete"></td>
                    <td><img src="../../assets/images/espace/constellation1.jpeg" alt="constellation"></td>
                    <td><img src="../../assets/images/espace/constellation1.jpeg" alt="constellation"></td>
                </tr>
                <tr>
                    <td><img src="../../assets/images/espace/etoile1.jpeg" alt="etoile"></td>
                    <td><img src="../../assets/images/espace/etoile1.jpeg" alt="etoile"></td>
                    <td><img src="../../assets/images/espace/etoile2.webp" alt="etoile2"></td>
                    <td><img src="../../assets/images/espace/etoile2.webp" alt="etoile2"></td>
                    <td><img src="../../assets/images/espace/galaxie1.jpeg" alt="galaxie"></td>
                    <td><img src="../../assets/images/espace/galaxie1.jpeg" alt="galaxie"></td>
                    <td><img src="../../assets/images/espace/ISS1.jpeg" alt="ISS"></td>
                    <td><img src="../../assets/images/espace/ISS1.jpeg" alt="ISS"></td>
                </tr>
                <tr>
                    <td><img src="../../assets/images/espace/lune1.png" alt="lune"></td>
                    <td><img src="../../assets/images/espace/lune1.png" alt="lune"></td>
                    <td><img src="../../assets/images/espace/lune2.png" alt="lune"></td>
                    <td><img src="../../assets/images/espace/lune2.png" alt="lune"></td>
                    <td><img src="../../assets/images/espace/meteore.jpeg" alt="meteore"></td>
                    <td><img src="../../assets/images/espace/meteore.jpeg" alt="meteore"></td>
                    <td><img src="../../assets/images/espace/meteorite1.jpeg" alt="meteorite"></td>
                    <td><img src="../../assets/images/espace/meteorite1.jpeg" alt="meteorite"></td>
                </tr>
                <tr>
                    <td><img src="../../assets/images/espace/montagneSpace.jpeg" alt="montagne space"></td>
                    <td><img src="../../assets/images/espace/montagneSpace.jpeg" alt="montagne space"></td>
                    <td><img src="../../assets/images/espace/MultipleEtoile.jpeg" alt="Fond etoile"></td>
                    <td><img src="../../assets/images/espace/MultipleEtoile.jpeg" alt="Fond etoile"></td>
                    <td><img src="../../assets/images/espace/nebuleuse1.avif" alt="nebuleuse"></td>
                    <td><img src="../../assets/images/espace/nebuleuse1.avif" alt="nebuleuse"></td>
                    <td><img src="../../assets/images/espace/headerBackground.jpg" alt="header background"></td>
                    <td><img src="../../assets/images/espace/headerBackground.jpg" alt="header background"></td>
                </tr>
                <tr>
                    <td><img src="../../assets/images/espace/sattelite1.jpeg" alt="sattelite"></td>
                    <td><img src="../../assets/images/espace/sattelite1.jpeg" alt="sattelite"></td>
                    <td><img src="../../assets/images/espace/sattelite2.jpeg" alt="sattelite2"></td>
                    <td><img src="../../assets/images/espace/sattelite2.jpeg" alt="sattelite2"></td>
                    <td><img src="../../assets/images/espace/PillierDeLaCreation.jpeg" alt="Pillier de la creation"></td>
                    <td><img src="../../assets/images/espace/PillierDeLaCreation.jpeg" alt="Pillier de la creation"></td>
                    <td><img src="../../assets/images/espace/planete1.jpeg" alt="planet"></td>
                    <td><img src="../../assets/images/espace/planete1.jpeg" alt="planet"></td>
                </tr>
                <tr>
                    <td><img src="../../assets/images/espace/planete2.png" alt="planete2"></td>
                    <td><img src="../../assets/images/espace/planete2.png" alt="planete2"></td>
                    <td><img src="../../assets/images/espace/planete3.jpeg" alt="planete3"></td>
                    <td><img src="../../assets/images/espace/planete3.jpeg" alt="planete3"></td>
                    <td><img src="../../assets/images/espace/planete4.jpeg" alt="planete4"></td>
                    <td><img src="../../assets/images/espace/planete4.jpeg" alt="planete4"></td>
                    <td><img src="../../assets/images/espace/screen-black-hole.webp" alt="screen black hole"></td>
                    <td><img src="../../assets/images/espace/screen-black-hole.webp" alt="screen black hole"></td>
                </tr>
                <tr>
                    <td><img src="../../assets/images/espace/Soyouz.jpeg" alt="Soyouz"></td>
                    <td><img src="../../assets/images/espace/Soyouz.jpeg" alt="Soyouz"></td>
                    <td><img src="../../assets/images/espace/space.webp" alt="space"></td>
                    <td><img src="../../assets/images/espace/space.webp" alt="space"></td>
                    <td><img src="../../assets/images/espace/SphereDeDyson.jpeg" alt="spher de dyson"></td>
                    <td><img src="../../assets/images/espace/SphereDeDyson.jpeg" alt="spher de dyson"></td>
                    <td><img src="../../assets/images/espace/supernova1.avif" alt="supernova"></td>
                    <td><img src="../../assets/images/espace/supernova1.avif" alt="supernova"></td>
                </tr>
                <tr>
                    <td><img src="../../assets/images/espace/supernova1.jpeg" alt="supernova2"></td>
                    <td><img src="../../assets/images/espace/supernova1.jpeg" alt="supernova2"></td>
                    <td><img src="../../assets/images/espace/TrouDeVer1.jpeg" alt="trou de ver"></td>
                    <td><img src="../../assets/images/espace/TrouDeVer1.jpeg" alt="trou de ver"></td>
                    <td><img src="../../assets/images/espace/VoieLactee.jpg" alt="voie lactee"></td>
                    <td><img src="../../assets/images/espace/VoieLactee.jpg" alt="voie lactee"></td>
                    <td><img src="../../assets/images/espace/galaxy.jpeg" alt="galaxie"></td>
                    <td><img src="../../assets/images/espace/galaxy.jpeg" alt="galaxie"></td>
                </tr>
            </table>
        </main>

         <?php
            require_once SITE_ROOT.'partials/footer.php';
         ?>

        <script src="../../assets/js/scripts.js"></script>
    </body>
</html>