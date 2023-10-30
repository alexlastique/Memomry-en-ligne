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
        <div class="PageScores">
            <div class="progression">
                <p>Progression</p>
                <div class="jauge">
                    <div class="remplissage">25%</div>
                </div>
            </div>
            <table>
                <tr>
                    <th class="FaitBase">Fait?</th>
                    <th>Definition du succes</th>
                </tr>
                <tr>
                    <td class="Fait">🆕</td>
                    <td>Terminé une partie en mode facile</td>
                </tr>
                <tr>
                    <td class="Fait">🆗</td>
                    <td>Terminé une partie en mode moyen</td>
                </tr>
                <tr>
                    <td class="Fait">🆕</td>
                    <td>Terminé une partie en mode difficile</td>
                </tr>
                <tr>
                    <td class="Fait">🆕</td>
                    <td>Cacher</td>
                </tr>
            </table>
        </div>
        <!--footer-->    
        <?php
            require_once SITE_ROOT.'partials/footer.php';
        ?>
        <!--fin footer-->
    </body>
</html>