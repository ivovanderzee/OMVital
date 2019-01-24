<?php

require 'start.php';

$pages = $conn->prepare("
        
        SELECT id, naam, tekst
        FROM blog
        ");
        
        $pages->execute();
        $pages = $pages->fetchAll(PDO::FETCH_ASSOC);

?>
