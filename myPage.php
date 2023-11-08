<?php
    die('rrr');
    if (isset($_POST['messageInput'])) {die('eee');
        $ChatMessage = $_POST['messageInput'];
        $pdo = connectToDbAndGetPdo();
        $pdoStatement = $pdo->prepare("INSERT INTO `Message` (IdGame, IdUser, Chat)
        VALUES (1,$UserId,'$ChatMessage');");
        $pdoStatement->execute();
    }
?>