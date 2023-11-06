<!DOCTYPE html>
<html>
    <?php
        require_once 'utils/common.php';
        require_once SITE_ROOT.'utils/database.php';
        require_once SITE_ROOT.'partials/head.php';
    ?>
    <body class="contact">
        <header class="login header">
            <?php
                require_once SITE_ROOT.'partials/header.php';
            ?>
            <h2 class="connexion">Profil</h2>
        </header>
        <h2>Joueur Teste</h2>
        <table class="PageScores">
            <tr>
                <th>Record du Joueur</th>
                <th>Niveau de Difficulté</th>
                <th>Date et Heure de la Partie</th>
            </tr>
            <tr>
                <td>1000</td>
                <td>Facile</td>
                <td>2023-10-17 14:30:00</td>
            </tr>
            <tr>
                <td>750</td>
                <td>Moyen</td>
                <td>2023-10-16 20:15:00</td>
            </tr>
            <tr>
                <td>5000</td>
                <td>Difficile</td>
                <td>2023-10-15 10:45:00</td>
            </tr>
        </table>
        <?php
            require_once SITE_ROOT.'partials/footer.php';
         ?>
    </body>
</html>