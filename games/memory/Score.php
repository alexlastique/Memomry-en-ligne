<!DOCTYPE html>
<html>
<?php
require_once '../../utils/common.php';
require_once SITE_ROOT . 'partials/head.php';
require_once SITE_ROOT . 'utils/database.php';
$pdo = connectToDbAndGetPdo();
$pdoStatement = $pdo->prepare('SELECT s.*, G.GameName as Game, u.Pseudo
FROM score s 
INNER JOIN game g 
ON s.gameId = g.id 
INNER JOIN user u ON s.userId = u.id 
ORDER BY s.score ASC');
$pdoStatement->execute();
$scores = $pdoStatement->fetchAll();
?>

<body>
    <header class="login header">
        <?php
        require_once SITE_ROOT . 'partials/header.php';
        ?>
        <h2 class="connexion">Score</h2>
    </header>

    <!--
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
-->
    <?php
    foreach ($scores as $score) {
        echo $score->Pseudo;
        echo $score->GameName;
        echo $score->GameDifficult;
        echo $score->GameScore;
    }
    ?>
    <!--footer-->
    <?php
    require_once SITE_ROOT . 'partials/footer.php';
    ?>
    <!--fin footer-->
</body>

</html>