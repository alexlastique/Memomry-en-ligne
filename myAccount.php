<!DOCTYPE html>
<html>
    <?php
        require_once 'utils/common.php';
        require_once SITE_ROOT.'utils/database.php';
        require_once SITE_ROOT.'partials/head.php';
        $ValidityChange ="";
        $ChangeInfo = "";
        $ChangeInfo2 = "";
        if (!empty($_SESSION['userId'])){$IdUser = $_SESSION['userId'];}


        if (isset($_POST['ChangeLastEmail']) && isset($_POST['ChangeNewEmail']) && isset($_POST['ChangePassword'])) {
            $ChangeLastEmail = $_POST['ChangeLastEmail'];
            $ChangeNewEmail = $_POST['ChangeNewEmail'];
            $ChangePassword = $_POST['ChangePassword'];
            $HashPassword = hash(
                'sha512',
                $ChangePassword
            );
            $pdo = connectToDbAndGetPdo();
            $pdoStatement = $pdo->prepare("SELECT PasswordUser, Email FROM Utilisateur
            WHERE Id='$IdUser';");
            $pdoStatement->execute();
            $ChangeLastInfo = $pdoStatement->fetch();

            if($HashPassword==$ChangeLastInfo->PasswordUser && $ChangeLastEmail==$ChangeLastInfo->Email){
                $pdoStatement = $pdo->prepare("UPDATE Utilisateur
                SET Email='$ChangeNewEmail'
                WHERE Id='$IdUser';");
                $pdoStatement->execute();
                $ChangeInfo = "Modification effectuer";
            }
            else{
                $ChangeInfo = 'Email ou mots de passe faux';
            }
        }
        if (isset($_POST['ChangeLastPassword']) && isset($_POST['ChangeNewPassword']) && isset($_POST['ChangeNewPassword2'])) {
            $ChangeLastPassword = $_POST['ChangeLastPassword'];
            $ChangeNewPassword = $_POST['ChangeNewPassword'];
            $ChangeNewPassword2 = $_POST['ChangeNewPassword2'];

            $HashLastPassword = hash(
                'sha512',
                $ChangeLastPassword
            );

            $HashNewPassword = hash(
                'sha512',
                $ChangeNewPassword
            );

            $HashNewPassword2 = hash(
                'sha512',
                $ChangeNewPassword2
            );

            $pdo = connectToDbAndGetPdo();
            $pdoStatement = $pdo->prepare("SELECT PasswordUser FROM Utilisateur
            WHERE Id='$IdUser';");
            $pdoStatement->execute();
            $ChangeLastInfo = $pdoStatement->fetch();

            if($HashLastPassword==$ChangeLastInfo->PasswordUser && $HashNewPassword==$HashNewPassword2){
                $pdoStatement = $pdo->prepare("UPDATE Utilisateur
                SET PasswordUser='$HashNewPassword'
                WHERE Id='$IdUser';");
                $pdoStatement->execute();
                $ChangeInfo2 = "Modification effectuer";
            }
            else{
                $ChangeInfo2 = 'Mots de passe incorect';
            }
        }
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $nom_dossier = "userFiles/$IdUser";

            if (!is_dir($nom_dossier)) {
                mkdir($nom_dossier); 
            }

            if (isset($_FILES["image"])) {
                $targetDirectory = "userFiles/$IdUser/"; 
                $targetFile = $targetDirectory . basename("PP");
                if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
                    echo "L'image a été téléversée avec succès.";
                } else {
                    echo "Une erreur est survenue lors du téléversement de l'image.";
                }
        }else{
            echo "Erreur";
        }
        }

?>

    <body>
    <header class="login header">
        <?php
            require_once SITE_ROOT.'partials/header.php';
        ?>
        <h2 class="connexion">Mon Espace</h2>
    </header>

    <main id="mainAccount">
        <section>
            <h2>Ta photo de profil</h2>
            <img class="rounded-circle mt-5" width="150px" src="userFiles/<?=$IdUser?>/PP">
            <form method="post" enctype="multipart/form-data">
                <input type="file" name="image">
                <input type="submit" value="Uploader">
            </form>
        </section>
        <form method="post">
            <fieldset>
                <h3>Changer l'adresse email</h3>
                <input name="ChangeLastEmail" type="email" placeholder=" &nbsp; Ancien email">
                <input name="ChangeNewEmail" type="pseudo" placeholder=" &nbsp; Nouveau email">
                <input name="ChangePassword" type="password" placeholder=" &nbsp; Mot de passe">
                <input type="submit" value=" &nbsp; Changer l'adresse mail" class="SubmitEspace">
                <?= $ChangeInfo?>
            </fieldset>
        </form>
        <form method="post">
            <fieldset>
                <h3>Changer le mot de passe</h3>
                <input name="ChangeLastPassword" type="password" placeholder=" &nbsp; Ancien mot de passe">
                <input name="ChangeNewPassword" type="password" placeholder=" &nbsp; Nouveau mot de passe">
                <input name="ChangeNewPassword2" type="password" placeholder=" &nbsp; Confirmer le mot de passe">
                <input type="submit" value=" &nbsp; Changer le mot de passe" class="SubmitEspace">
                <?= $ChangeInfo2?>
            </fieldset>
        </form>

    </main>

    <?php
        require_once SITE_ROOT.'partials/footer.php';
    ?>  
    <!--fin footer-->
    </body>
</html>