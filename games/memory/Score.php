<!DOCTYPE html>
<html>
<?php
        require_once '../../utils/common.php';
        require_once SITE_ROOT.'partials/head.php'
    ?>
    <body id="memory">
        <?php
            require_once SITE_ROOT.'partials/header.php';
        ?>
    

        <table class="PageScores">
                <tr>
                    <th>Nom du Jeu</th>
                    <th>Pseudo du Joueur</th>
                    <th>Score du Joueur</th>
                    <th>Niveau de Difficulté</th>
                    <th>Date et Heure de la Partie</th>
                </tr>
                <tr>
                    <td>Space Memory</td>
                    <td>Joueur 1</td>
                    <td>1000</td>
                    <td>Facile</td>
                    <td>2023-10-17 14:30:00</td>
                </tr>
                <tr>
                    <td>Space Memory</td>
                    <td>Joueur 2</td>
                    <td>750</td>
                    <td>Moyen</td>
                    <td>2023-10-16 20:15:00</td>
                </tr>
                <tr>
                    <td>Space Memory</td>
                    <td>Joueur 3</td>
                    <td>5000</td>
                    <td>Difficile</td>
                    <td>2023-10-15 10:45:00</td>
                </tr>
        </table>
        <!--footer-->    
        <?php
            require_once SITE_ROOT.'partials/footer.php';
        ?>
        <!--fin footer-->
    </body>
</html>