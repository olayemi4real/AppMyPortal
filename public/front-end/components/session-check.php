<?php
if (session_id()=='')
    session_start();
    require '_database/database.php';
    if(!$_SESSION['user_username']){
        //header("location:login.php?session=notset");
        //header("location:signup.php?session=notset");
    }
?>