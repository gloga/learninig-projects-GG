<?php
    session_start();
    include("connection.php");
    $query = "UPDATE users SET diary ='".mysqli_real_escape_string($link,$_POST['diary'])."' WHERE id='".$_SESSION['id']."' LIMIT 1;";
    mysqli_query($link, $query);
/**
 * Created by PhpStorm.
 * User: Gabriel
 * Date: 5.7.2015.
 * Time: 23:05
 */
?>