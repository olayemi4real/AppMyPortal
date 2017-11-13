<?php
    session_start();
    require '_database/database.php';
    //if($_SESSION['user_username']){
    $username= isset($_SESSION['user_username']);
    if($username){
        //header("location:index.php");
    }
?>