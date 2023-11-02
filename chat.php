<?php
        require_once '../../utils/common.php';
        require_once SITE_ROOT . 'partials/head.php';
        require_once SITE_ROOT . 'utils/database.php';
        if(!empty($_SESSION['userId'])){$UserId = $_SESSION['userId'];}

        if (isset($_POST['name'])) {
            $PseudoShearch = $_POST['name'];
        }

        $pdo = connectToDbAndGetPdo();
        $pdoStatement = $pdo->prepare("SELECT M.Chat, M.MessageDate, U.Pseudo, M.IdUser FROM `Message` AS M
        LEFT JOIN Utilisateur as U On M.IdUser = U.Id
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
        <div id="messages">
        <?php 
            foreach($chats as $chat){
                if($chat->IdUser==1):
        ?>
                    <div class="flex">
                        <div class="column user">
                            <p><?php echo $chat->Pseudo ?></p>
                            <div class="message usersmessage">
                                <p><?php echo $Message = $chat->Chat ?></p>
                            </div>
                            <p><?php echo $chat->MessageDate ?></p>
                        </div>
                    </div>

                <?php else:?>

                    <div class="flex">
                        <img src="../../assets/images/AvataBot.png"width="36px"height="36px">
                        <div class="column">
                            <p><?php echo $chat->Pseudo ?></p>
                            <div class="message">
                                <p><?php echo $Message = $chat->Chat ?></p>
                            </div>
                            <p><?php echo $chat->MessageDate ?></p>
                        </div>
                    </div>

                <?php endif;?>
            <?php }?>
        </div>
        <div id="input">
            <form>
                <input type="text" name="chat" placeholder="Votre message...">
                <button><strong>Envoyer</strong></button>
            </form>
        </div>
    </div>
</div>