<!DOCTYPE html>
<html>
    <?php
        require_once 'utils/common.php';
        require_once SITE_ROOT.'utils/database.php';
        require_once SITE_ROOT.'partials/head.php';
    ?>
    <?php
        $destinataire = "papatate2@gmail.com";
        if(isset($_POST['LoginEmail']) && isset($_POST['LoginPassword'])){
            $sujet = "Sujet de l'e-mail";
            $message = "Contenu de votre message.";
        }

        // En-têtes de l'e-mail
        $headers = "From: expediteur@example.com\r\n";
        $headers .= "Reply-To: expediteur@example.com\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/plain; charset=utf-8\r\n";

        // Envoi de l'e-mail
        if (mail($destinataire, $sujet, $message, $headers)) {
            echo "L'e-mail a été envoyé avec succès.";
        } else {
            echo "Échec de l'envoi de l'e-mail.";
        }
    ?>

    <body>
        <header class="login header">
            <?php
                require_once SITE_ROOT.'partials/header.php';
            ?>
            <h2 class="connexion">Nous Contacter</h2>
        </header>


        <main id="mainContact">
        <section class="align">
            <div>
                <br/>
                <img src="assets/images/telephone.png"width="48px"height="48px"/>
                <p>06 59 49 68 30</p>
            </div>
            <div>
                <br/>
                <img src="assets/images/mail.png"width="48px"height="48px"/>
                <p>jean.david@gmail.com</p>
            </div>
            <div>
                <br/>
                <img src="assets/images/map.png"width="48px"height="48px"/>
                <p>Paris</p>
            </div>
        </section>
        <form method="post" class="form">
            <div id="inputPetit">
                <input type="text" name="name" id="name" placeholder="  &nbsp; Nom">
                <input type="email" name="mail" id="mail" placeholder=" &nbsp; Email">
            </div>
                <input type="text" name="sujet" id="sujet" placeholder=" &nbsp; Sujet" class="inputgrand">
                <textarea name="message" id="message" placeholder=" &nbsp; Message" class="inputgrand"></textarea>
                <br>
                <input type="submit" value="Envoyer" class="Submit">
        </form>
        </main>
        <!--footer-->
        <?php
            require_once SITE_ROOT.'partials/footer.php';
        ?>
        <!--fin footer-->
    </body>
</html>