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
        $pdoStatement = $pdo->prepare("SELECT Chat, MessageDate, U.Pseudo, IdUser, FROM `Message`
        LEFT JOIN Utilisateur as U On Score.IdUser = U.Id
        ORDER BY MessageDate ASC");
        $pdoStatement->execute();
        $chats = $pdoStatement->fetchAll();
?>
<div id="pos_chat">
    <input type="checkbox" id="toggle" class="toggle-checkbox">
    <label for="toggle" class="floating-button"></label>
    <div id="chat">
        <div id="head">
            <img src="../../assets/images/AvataBot.png"width="36px"height="36px">
            <p>Chat générale</p>
        </div>
        <?php 
            foreach($chats as $chat){
                if(!empty($IdUser)):
                    if($IdUser==$chat->IdUser):
        ?>
        <div id="messages">
            <div class="flex">
                <img src="../../assets/images/AvataBot.png"width="36px"height="36px">
                <div class="column">
                    <p>Quelqu'un</p>
                    <div class="message">
                        <p>Je sui qq</p>
                    </div>
                    <p>Aujourd'hui à 16h15</p>
                </div>
            </div>
            <?php endif;?>
                    <?php else:?>
            <div class="flex">
                <div class="column user">
                    <p>Moi</p>
                    <div class="message usersmessage">
                        <p>Je suis moi</p>
                    </div>
                    <p>Aujourd'hui à 16h17</p>
                </div>
            </div>
        </div>
        <?php endif;?>
        
        <?php }?>
        <div id="input">
            <form>
                <input type="text" name="chat" placeholder="Votre message...">
                <button><strong>Envoyer</strong></button>
            </form>
        </div>
    </div>
</div>