<?php

session_start();

if ( isset( $_SESSION['id'] ) ) {
    
    echo "succes!";
    
} else {
    // Redirect them to the login page
    header("Location: login.php");
}
?>

<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>OMVital</title>
</head>

<body>


    <form action="logout.php">
        <button type="submit">logout</button>
    </form>



</body>

</html>
