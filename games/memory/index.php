<!DOCTYPE html>
<html>
    <?php
        require_once '../../utils/common.php';
        require_once SITE_ROOT.'partials/head.php'
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

            <div id="pos_chat">
                <input type="checkbox" id="toggle" class="toggle-checkbox">
                <label for="toggle" class="floating-button"></label>
                <div id="chat">
                    <div id="head">
                        <img src="../../assets/images/AvataBot.png"width="36px"height="36px">
                        <p>Chat générale</p>
                    </div>
                    <div id="messages">
                        <div class="flex">
                            <img src="../../assets/images/AvataBot.png"width="36px"height="36px">
                            <div class="column">
                                <p>Quelqu'un</p>
                                <div class="message">
                                    <p>Je sui qq</p>
                                </div>
                                <p>Aujourd'hui à 16h15</p>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="column user">
                                <p>Moi</p>
                                <div class="message usersmessage">
                                    <p>Je suis moi</p>
                                </div>
                                <p>Aujourd'hui à 16h17</p>
                            </div>
                        </div>
                    </div>
                    <div id="input">
                        <form>
                            <input type="text" name="chat" placeholder="Votre message...">
                            <button><strong>Envoyer</strong></button>
                        </form>
                    </div>
                </div>
            </div>
            
            <table class="Scores" id="TableMemory1">
                <tr>
                    <td><img src="../../assets/images/black-hole.avif" alt="trou noir"></td>
                    <td><img src="../../assets/images/black-hole.avif" alt="trou noir"></td>
                    <td><img src="../../assets/images/black-hole.jpeg" alt="trou noir2"></td>
                    <td><img src="../../assets/images/black-hole.jpeg" alt="trou noir2"></td>
                </tr>
                <tr>
                    <td><img src="../../assets/images/comete1.jpeg" alt="comete"></td>
                    <td><img src="../../assets/images/comete1.jpeg" alt="comete"></td>
                    <td><img src="../../assets/images/constellation1.jpeg" alt="constellation"></td>
                    <td><img src="../../assets/images/constellation1.jpeg" alt="constellation"></td>
                </tr>
                <tr>
                    <td><img src="../../assets/images/etoile1.jpeg" alt="etoile"></td>
                    <td><img src="../../assets/images/etoile1.jpeg" alt="etoile"></td>
                    <td><img src="../../assets/images/etoile2.webp" alt="etoile2"></td>
                    <td><img src="../../assets/images/etoile2.webp" alt="etoile2"></td>
                </tr>
                <tr>
                    <td><img src="../../assets/images/galaxie1.jpeg" alt="galaxie"></td>
                    <td><img src="../../assets/images/galaxie1.jpeg" alt="galaxie"></td>
                    <td><img src="../../assets/images/galaxy.jpeg" alt="galaxie2"></td>
                    <td><img src="../../assets/images/galaxy.jpeg" alt="galaxie2"></td>
                </tr>
            </table>
            <table class="Scores medium"  id="TableMemory2">
                <tr>
                    <td><img src="../../assets/images/black-hole.avif" alt="troue noir"></td>
                    <td><img src="../../assets/images/black-hole.avif" alt="troue noir"></td>
                    <td><img src="../../assets/images/black-hole.jpeg" alt="troue noir2"></td>
                    <td><img src="../../assets/images/black-hole.jpeg" alt="troue noir2"></td>
                    <td><img src="../../assets/images/comete1.jpeg" alt="comete"></td>
                    <td><img src="../../assets/images/comete1.jpeg" alt="comete"></td>
                </tr>
                <tr>
                    <td><img src="../../assets/images/constellation1.jpeg" alt="constellation"></td>
                    <td><img src="../../assets/images/constellation1.jpeg" alt="constellation"></td>
                    <td><img src="../../assets/images/etoile1.jpeg" alt="etoile"></td>
                    <td><img src="../../assets/images/etoile1.jpeg" alt="etoile"></td>
                    <td><img src="../../assets/images/etoile2.webp" alt="etoile2"></td>
                    <td><img src="../../assets/images/etoile2.webp" alt="etoile2"></td>
                </tr>
                <tr>
                    <td><img src="../../assets/images/galaxie1.jpeg" alt="galaxie"></td>
                    <td><img src="../../assets/images/galaxie1.jpeg" alt="galaxie"></td>
                    <td><img src="../../assets/images/ISS1.jpeg" alt="ISS"></td>
                    <td><img src="../../assets/images/ISS1.jpeg" alt="ISS"></td>
                    <td><img src="../../assets/images/lune1.png" alt="lune"></td>
                    <td><img src="../../assets/images/lune1.png" alt="lune"></td>
                </tr>
                <tr>
                    <td><img src="../../assets/images/lune2.png" alt="lune"></td>
                    <td><img src="../../assets/images/lune2.png" alt="lune"></td>
                    <td><img src="../../assets/images/meteore.jpeg" alt="meteore"></td>
                    <td><img src="../../assets/images/meteore.jpeg" alt="meteore"></td>
                    <td><img src="../../assets/images/meteorite1.jpeg" alt="meteorite"></td>
                    <td><img src="../../assets/images/meteorite1.jpeg" alt="meteorite"></td>
                </tr>
                <tr>
                    <td><img src="../../assets/images/montagneSpace.jpeg" alt="montagne space"></td>
                    <td><img src="../../assets/images/montagneSpace.jpeg" alt="montagne space"></td>
                    <td><img src="../../assets/images/MultipleEtoile.jpeg" alt="Fond etoile"></td>
                    <td><img src="../../assets/images/MultipleEtoile.jpeg" alt="Fond etoile"></td>
                    <td><img src="../../assets/images/nebuleuse1.avif" alt="nebuleuse"></td>
                    <td><img src="../../assets/images/nebuleuse1.avif" alt="nebuleuse"></td>
                </tr>
                <tr>
                    <td><img src="../../assets/images/PillierDeLaCreation.jpeg" alt="Pillier de la creation"></td>
                    <td><img src="../../assets/images/PillierDeLaCreation.jpeg" alt="Pillier de la creation"></td>
                    <td><img src="../../assets/images/planete1.jpeg" alt="planet"></td>
                    <td><img src="../../assets/images/planete1.jpeg" alt="planet"></td>
                    <td><img src="../../assets/images/planete2.png" alt="planete2"></td>
                    <td><img src="../../assets/images/planete2.png" alt="planete2"></td>
                </tr>
            </table>
            <table class="Scores hard"  id="TableMemory3">
                <tr>
                    <td><img src="../../assets/images/black-hole.avif" alt="troue noir"></td>
                    <td><img src="../../assets/images/black-hole.avif" alt="troue noir"></td>
                    <td><img src="../../assets/images/black-hole.jpeg" alt="troue noir2"></td>
                    <td><img src="../../assets/images/black-hole.jpeg" alt="troue noir2"></td>
                    <td><img src="../../assets/images/comete1.jpeg" alt="comete"></td>
                    <td><img src="../../assets/images/comete1.jpeg" alt="comete"></td>
                    <td><img src="../../assets/images/constellation1.jpeg" alt="constellation"></td>
                    <td><img src="../../assets/images/constellation1.jpeg" alt="constellation"></td>
                </tr>
                <tr>
                    <td><img src="../../assets/images/etoile1.jpeg" alt="etoile"></td>
                    <td><img src="../../assets/images/etoile1.jpeg" alt="etoile"></td>
                    <td><img src="../../assets/images/etoile2.webp" alt="etoile2"></td>
                    <td><img src="../../assets/images/etoile2.webp" alt="etoile2"></td>
                    <td><img src="../../assets/images/galaxie1.jpeg" alt="galaxie"></td>
                    <td><img src="../../assets/images/galaxie1.jpeg" alt="galaxie"></td>
                    <td><img src="../../assets/images/ISS1.jpeg" alt="ISS"></td>
                    <td><img src="../../assets/images/ISS1.jpeg" alt="ISS"></td>
                </tr>
                <tr>
                    <td><img src="../../assets/images/lune1.png" alt="lune"></td>
                    <td><img src="../../assets/images/lune1.png" alt="lune"></td>
                    <td><img src="../../assets/images/lune2.png" alt="lune"></td>
                    <td><img src="../../assets/images/lune2.png" alt="lune"></td>
                    <td><img src="../../assets/images/meteore.jpeg" alt="meteore"></td>
                    <td><img src="../../assets/images/meteore.jpeg" alt="meteore"></td>
                    <td><img src="../../assets/images/meteorite1.jpeg" alt="meteorite"></td>
                    <td><img src="../../assets/images/meteorite1.jpeg" alt="meteorite"></td>
                </tr>
                <tr>
                    <td><img src="../../assets/images/montagneSpace.jpeg" alt="montagne space"></td>
                    <td><img src="../../assets/images/montagneSpace.jpeg" alt="montagne space"></td>
                    <td><img src="../../assets/images/MultipleEtoile.jpeg" alt="Fond etoile"></td>
                    <td><img src="../../assets/images/MultipleEtoile.jpeg" alt="Fond etoile"></td>
                    <td><img src="../../assets/images/nebuleuse1.avif" alt="nebuleuse"></td>
                    <td><img src="../../assets/images/nebuleuse1.avif" alt="nebuleuse"></td>
                    <td><img src="../../assets/images/headerBackground.jpg" alt="header background"></td>
                    <td><img src="../../assets/images/headerBackground.jpg" alt="header background"></td>
                </tr>
                <tr>
                    <td><img src="../../assets/images/sattelite1.jpeg" alt="sattelite"></td>
                    <td><img src="../../assets/images/sattelite1.jpeg" alt="sattelite"></td>
                    <td><img src="../../assets/images/sattelite2.jpeg" alt="sattelite2"></td>
                    <td><img src="../../assets/images/sattelite2.jpeg" alt="sattelite2"></td>
                    <td><img src="../../assets/images/PillierDeLaCreation.jpeg" alt="Pillier de la creation"></td>
                    <td><img src="../../assets/images/PillierDeLaCreation.jpeg" alt="Pillier de la creation"></td>
                    <td><img src="../../assets/images/planete1.jpeg" alt="planet"></td>
                    <td><img src="../../assets/images/planete1.jpeg" alt="planet"></td>
                </tr>
                <tr>
                    <td><img src="../../assets/images/planete2.png" alt="planete2"></td>
                    <td><img src="../../assets/images/planete2.png" alt="planete2"></td>
                    <td><img src="../../assets/images/planete3.jpeg" alt="planete3"></td>
                    <td><img src="../../assets/images/planete3.jpeg" alt="planete3"></td>
                    <td><img src="../../assets/images/planete4.jpeg" alt="planete4"></td>
                    <td><img src="../../assets/images/planete4.jpeg" alt="planete4"></td>
                    <td><img src="../../assets/images/screen-black-hole.webp" alt="screen black hole"></td>
                    <td><img src="../../assets/images/screen-black-hole.webp" alt="screen black hole"></td>
                </tr>
                <tr>
                    <td><img src="../../assets/images/Soyouz.jpeg" alt="Soyouz"></td>
                    <td><img src="../../assets/images/Soyouz.jpeg" alt="Soyouz"></td>
                    <td><img src="../../assets/images/space.webp" alt="space"></td>
                    <td><img src="../../assets/images/space.webp" alt="space"></td>
                    <td><img src="../../assets/images/SphereDeDyson.jpeg" alt="spher de dyson"></td>
                    <td><img src="../../assets/images/SphereDeDyson.jpeg" alt="spher de dyson"></td>
                    <td><img src="../../assets/images/supernova1.avif" alt="supernova"></td>
                    <td><img src="../../assets/images/supernova1.avif" alt="supernova"></td>
                </tr>
                <tr>
                    <td><img src="../../assets/images/supernova1.jpeg" alt="supernova2"></td>
                    <td><img src="../../assets/images/supernova1.jpeg" alt="supernova2"></td>
                    <td><img src="../../assets/images/TrouDeVer1.jpeg" alt="trou de ver"></td>
                    <td><img src="../../assets/images/TrouDeVer1.jpeg" alt="trou de ver"></td>
                    <td><img src="../../assets/images/VoieLactee.jpg" alt="voie lactee"></td>
                    <td><img src="../../assets/images/VoieLactee.jpg" alt="voie lactee"></td>
                    <td><img src="../../assets/images/galaxy.jpeg" alt="galaxie"></td>
                    <td><img src="../../assets/images/galaxy.jpeg" alt="galaxie"></td>
                </tr>
            </table>
        </main>
         <!--footer-->
         <?php
            require_once SITE_ROOT.'partials/footer.php';
         ?>
        <script src="../../assets/js/scripts.js"></script>
    </body>
</html>