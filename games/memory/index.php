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
        <div class="container">
            <h2 id="counter">00:00:00</h1>
            <button class="button" id="start">Jouer</button>
        </div>
        <article class="themeChoice">
                <h3>Choisissez votre thème de jeu :</h3>
                <div>
                    <button id="theme1">Thème dessin</button>
                    <button id="theme2">Thème réel</button>
                    <button id="theme3">Thème constellation</button>
                </div>
            </article>
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
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                </tr>
                <tr>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                </tr>
                <tr>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                </tr>
                <tr>
                    
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                </tr>
            </table>
            <table class="Scores medium"  id="TableMemory2">
                <tr>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                </tr>
                <tr>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                </tr>
                <tr>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                </tr>
                <tr>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                </tr>
                <tr>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                </tr>
                <tr>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                </tr>
            </table>
            <table class="Scores hard"  id="TableMemory3">
                <tr>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                </tr>
                <tr>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                </tr>
                <tr>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                </tr>
                <tr>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                </tr>
                <tr>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                </tr>
                <tr>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                </tr>
                <tr>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                </tr>
                <tr>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                    <td><img src="../../assets/images/DosDeCarte.png" alt="galaxie"></td>
                </tr>
            </table>
        </main>

         <?php
            require_once SITE_ROOT.'partials/footer.php';
         ?>

        <script src="../../assets/js/scripts.js"></script>
    </body>
</html>