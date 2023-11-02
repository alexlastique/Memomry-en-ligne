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
            <h2>Ta photo</h2>
            <button><img class="rounded-circle mt-5" width="150px" src="userFiles/<?php $IdUser?>"></button>
        </section>
        <form method="post" action="">
            <fieldset>
                <h3>Changer l'adresse email</h3>
                <input name="ChangeLastEmail" type="email" placeholder=" &nbsp; Ancien email">
                <input name="ChangeNewEmail" type="pseudo" placeholder=" &nbsp; Nouveau email">
                <input name="ChangePassword" type="password" placeholder=" &nbsp; Mot de passe">
                <input type="submit" value=" &nbsp; Changer l'adresse mail" class="SubmitEspace">
                <?= $ChangeInfo?>
            </fieldset>
        </form>
        <form method="post" action="">
            <fieldset>
                <h3>Changer le mot de passe</h3>
                <input name="ChangeLastPassword" type="password" placeholder=" &nbsp; Ancien mot de passe">
                <input name="ChangeNewPassword" type="password" placeholder=" &nbsp; Nouveau mot de passe">
                <input name="ChangeNewPassword2" type="password" placeholder=" &nbsp; Confirmer le mot de passe">
                <input type="submit" value=" &nbsp; Changer le mot de passe" class="SubmitEspace">
                <?= $ChangeInfo2?>
            </fieldset>
        </form>
        <button>Deconnexion<?php session_destroy()?></button>
    </main>

    <?php
        require_once SITE_ROOT.'partials/footer.php';
    ?>  
    <!--fin footer-->
    </body>
</html>