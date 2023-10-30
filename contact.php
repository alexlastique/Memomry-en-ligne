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
        <form method="POST" class="form">
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
        
        <!--fin footer-->
    </body>
</html>