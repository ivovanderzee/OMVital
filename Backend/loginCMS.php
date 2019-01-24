<?php

session_start();
 
if(isset($_POST['submit'])){
     
include 'start.php';
     
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
     
     
    if(empty($username) || empty($password)){
         
        header("Location: login.php?login=empty");
        exit();
         
    }else{
        $sql = "SELECT * FROM users WHERE username='$username'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
         
        if($resultCheck < 1){
             
           header("Location: login.php?login=invalid");
           exit(); 
             
        }else{
             
            if($row = mysqli_fetch_assoc($result)){
                 
             
                 
                if($password == $row['password']){
                     
                     
                    $_SESSION['id'] = $row['id'];
                    header("Location: cmsIndex.php");
                    exit();
                   
                     
                }
                 
                else{
                     
                   header("Location: login.php?login=error2");
                     
                }
                 
            }
             
        }
    }
     
     
}else{
        header("Location: login.php?login=error3");
        exit();
    }
