<?php

require 'start.php';

$pages = $conn->prepare("
        
        SELECT id, username, password
        FROM users
        ");
        
        $pages->execute();
        $pages = $pages->fetchAll(PDO::FETCH_ASSOC);

?>
