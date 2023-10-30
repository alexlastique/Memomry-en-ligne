<!DOCTYPE html>
<html>
        <?php
            require_once 'utils/common.php';
            require_once SITE_ROOT.'partials/head.php'
        ?>
        <body id="memory">
        <?php
            require_once SITE_ROOT.'partials/header.php';
        ?>
        <main id="mainAccount">
            <section>
                <h2>Alexis</h2>
                <img class="rounded-circle mt-5" width="150px" src="assets/images/alexis.jpg">
            </section>
            <form action="">
                <fieldset>
                    <h3>Changer l'adresse email</h3>
                    <input type="email" placeholder=" &nbsp; Ancien email">
                    <input type="pseudo" placeholder=" &nbsp; Nouveau email">
                    <input type="password" placeholder=" &nbsp; Mot de passe">
                    <input type="submit" value=" &nbsp; Changer l'adresse mail" class="SubmitEspace">
                </fieldset>
                <fieldset>
                    <h3>Changer le mot de passe</h3>
                    <input type="password" placeholder=" &nbsp; Ancien mot de passe">
                    <input type="password" placeholder=" &nbsp; Nouveau mot de passe">
                    <input type="password" placeholder=" &nbsp; Confirmer le mot de passe">
                    <input type="submit" value=" &nbsp; Changer le mot de passe" class="SubmitEspace">
                </fieldset>
            </form>
        </main>

        <?php
            require_once SITE_ROOT.'partials/footer.php';
        ?>  
        <!--fin footer-->
    </body>
</html>