<!DOCTYPE html>
<html>
<?php
require_once '../../utils/common.php';
require_once SITE_ROOT . 'partials/head.php';
require_once SITE_ROOT . 'utils/database.php';
$pdo = connectToDbAndGetPdo();
$pdoStatement = $pdo->prepare('SELECT Game.GameName, Utilisateur.Pseudo, GameDifficult, GameScore FROM Score
LEFT JOIN Game ON Score.IdGame = Game.Id
LEFT JOIN Utilisateur On Score.IdUser = Utilisateur.Id
ORDER BY IdGame, GameDifficult, GameScore ASC');
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

        <table class="PageScores">
                <tr>
                    <th>Nom du Jeu</th>
                    <th>Pseudo du Joueur</th>
                    <th>Score du Joueur</th>
                    <th>Niveau de Difficulté</th>
                </tr>
                <?php
                foreach ($scores as $score) {
                    ?>
                <tr>
                    <td><?php echo $score->GameName ?></td>
                    <td><?php echo $score->Pseudo ?></td>
                    <td><?php echo $score->GameDifficult == 1 ? "Facile" : ($score->GameDifficult == 2 ? "Moyen" : "Difficile")?></td>
                    <td><?php echo $score->GameScore; ?></td>
                </tr>
                <?php 
                }
                ?>
        </table>
    <!--footer-->
    <?php
    require_once SITE_ROOT . 'partials/footer.php';
    ?>
    <!--fin footer-->
</body>

</html>