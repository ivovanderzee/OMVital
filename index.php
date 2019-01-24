<?php

require 'Backend/blogQuery.php';

?>

<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>OMVital</title>
</head>

<body>




    <?php foreach($pages as $page): ?>

    <?php echo $page['naam'];?>

    <?php echo $page['tekst'];?>

    <?php endforeach; ?>

</body>

</html>
