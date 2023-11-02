<!DOCTYPE html>
<html>
    <?php
        require_once '../../utils/common.php';
        require_once SITE_ROOT . 'partials/head.php';
        require_once SITE_ROOT . 'utils/database.php';
        $PseudoShearch = '';
        if(!empty($_SESSION['userId'])){$IdUser = $_SESSION['userId'];}

        if (isset($_POST['name'])) {
            $PseudoShearch = $_POST['name'];
        }

        $pdo = connectToDbAndGetPdo();
        $pdoStatement = $pdo->prepare("SELECT Game.GameName, Utilisateur.Pseudo, GameDifficult, GameScore, IdUser FROM Score
        LEFT JOIN Game ON Score.IdGame = Game.Id
        LEFT JOIN Utilisateur On Score.IdUser = Utilisateur.Id
        Where Utilisateur.Pseudo LIKE '%$PseudoShearch%'
            OR '$PseudoShearch'=''
        ORDER BY IdGame, GameDifficult, GameScore ASC");
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
            <form method="post">
                <div>
                    <input name="name" type="text" placeholder="Rechercher un Profil 🔎" class="searchProfil">
                </div>    
                <button>Envoyer</button>
            </form>
            
            <table class="PageScores">
                    <tr>
                        <th>Nom du Jeu</th>
                        <th>Pseudo du Joueur</th>
                        <th>Score du Joueur</th>
                        <th>Niveau de Difficulté</th>
                    </tr>
                    <?php
                        foreach ($scores as $score) {
                            if(!empty($IdUser)):
                                if($IdUser==$score->IdUser):
                    ?>
                    <tr style="color: orange;">
                        <td><?php echo $score->GameName ?></td>
                        <td><?php echo $score->Pseudo ?></td>
                        <td><?php echo $score->GameDifficult == 1 ? "Facile" : ($score->GameDifficult == 2 ? "Moyen" : "Difficile")?></td>
                        <td><?php echo $score->GameScore; ?></td>
                    </tr>
                    <?php endif;?>
                    <?php else:?>
                    <tr>
                        <td><?php echo $score->GameName ?></td>
                        <td><?php echo $score->Pseudo ?></td>
                        <td><?php echo $score->GameDifficult == 1 ? "Facile" : ($score->GameDifficult == 2 ? "Moyen" : "Difficile")?></td>
                        <td><?php echo $score->GameScore; ?></td>
                    </tr>
                    <?php endif;?>
                    <?php }?>
            </table>
            
        <?php
            require_once SITE_ROOT . 'partials/footer.php';
        ?>
        
    </body>

</html>