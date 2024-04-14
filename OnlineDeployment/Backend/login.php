<?php

    $un=$_POST["username"];      
    $pass=$_POST["password"];  

    $file_path = '../txtfiles/signupform.txt';
    
    $lines = file($file_path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    
    
    $loggedIn=false;
    for ($i = 0; $i < count($lines); $i += 6) {
        $username = $lines[$i];
        $password = $lines[$i + 3]; 
    
       
        if ($un == $username && $pass == $password) {
            $loggedIn = true;
            break;
        }
    }

    if ($loggedIn){
        session_start();
        $_SESSION["username"]=$un;
        header("location:../MainPage/main.html");
    }else{
        header("location:../index.php");
    }


?>