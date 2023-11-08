<?php
        require_once '../../utils/common.php';
        require_once SITE_ROOT . 'partials/head.php';
        require_once SITE_ROOT . 'utils/database.php';
        if(!empty($_SESSION['userId'])){$UserId = $_SESSION['userId'];}
        $ChatMessage='';

        $pdo = connectToDbAndGetPdo();
        $pdoStatement = $pdo->prepare("SELECT M.Chat, M.MessageDate, U.Pseudo, M.IdUser FROM `Message` as M
        LEFT JOIN Utilisateur as U ON M.IdUser = U.Id
        WHERE MessageDate + INTERVAL 24 HOUR >= CURRENT_TIMESTAMP
        ORDER BY MessageDate ASC");
        $pdoStatement->execute();
        $chats = $pdoStatement->fetchAll();

        
        $GIFChatLien = "https://api.thecatapi.com/v1/images/search?mime_types=gif";
        $GIFChat=file_get_contents($GIFChatLien);
        $GIFChat2=json_decode($GIFChat, true);
        $URLChat = $GIFChat2[0]['url'];
?>
<div id="pos_chat">
    <input type="checkbox" id="toggle" class="toggle-checkbox">
    <label for="toggle" class="floating-button"></label>
    <div id="chat">
        <div id="head">
            <img src="<?=PROJECT_FOLDER?>userFiles/<?=$UserId?>/PP"class="icone">
            <p>Chat générale</p>
            <img src="<?=$URLChat?>" id="imageApi">
        </div>
        <div id="messages">
            <?php 
            foreach($chats as $chat){
                if($chat->IdUser==$UserId):
            ?>
                    <div class="flex">
                        <div class="column user">
                            <div>
                                <p><?php echo $chat->Pseudo ?></p>
                                <div id="flexChat">
                                    <div class="message usersmessage">
                                        <p><?php echo $Message = $chat->Chat ?></p>
                                    </div>
                                </div>
                            
                            </div>
                            <p><?php echo $chat->MessageDate ?></p>
                        </div>
                    </div>

                <?php else:?>

                    <div class="flex">
                        <?php if(file_exists(PROJECT_FOLDER."/userFiles/$chat->IdUser")){?>
                            <img src="<?=PROJECT_FOLDER?>userFiles/<?=$chat->IdUser?>/PP"class="icone">
                        <?php }else{?>
                            <img src="<?=PROJECT_FOLDER?>assets/images/IconeParDéfaut.png"class="icone">
                        <?php }?>
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
            <form method="post">
                <input id="messageInput" type="text" name="chat" placeholder="Votre message...">
                <input id="sendButton" type="button" value="Envoyer" onclick="envoyerMessage()">
            </form>
        </div>
    </div>
</div>