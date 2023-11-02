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
        $pdoStatement = $pdo->prepare("SELECT M.Chat, M.MessageDate, U.Pseudo, M.IdUser FROM `Message` as M
        LEFT JOIN Utilisateur as U ON M.IdUser = U.Id
        ORDER BY MessageDate ASC");
        $pdoStatement->execute();
        $messages = $pdoStatement->fetchAll();
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
            foreach($messages as $message){
                if(!empty($IdUser)):
                    if($IdUser==$chat->IdUser):
        ?>
        <div id="messages">
            <div class="flex">
                <img src="../../assets/images/AvataBot.png"width="36px"height="36px">
                <div class="column">
                    <p><?php echo $message->Pseudo ?></p>
                    <div class="message">
                        <p>Je suis <?php echo $message->Pseudo ?></p>
                    </div>
                    <p>Aujourd'hui à 16h15</p>
                </div>
            </div>


            <?php endif;?>
            <?php else:?>


            <div class="flex">
                <div class="column user">
                    <p><?php echo $message->Pseudo ?></p>
                    <div class="message">
                        <p>Je suis <?php echo $message->Pseudo ?></p>
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