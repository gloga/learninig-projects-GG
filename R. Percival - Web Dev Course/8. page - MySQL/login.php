<?php
    session_start();

    if($_GET["logout"]==1 AND $_SESSION['id'])
    {
        session_destroy();
        $message="You have logged out!";
        session_start();
    }

    include('connection.php');

    if($_POST['submit']=="Sign up")
    {
        if(!$_POST['username'])
            $error .= "</br>Please enter username";

        if(!$_POST['email'])
            $error .= "</br>Please enter email address";
        else{
            if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
                $error.="</br>Please enter valid email address";
        }

        if(!$_POST['password'])
            $error.="</br>Please enter password";
        else{
            if(strlen($_POST['password'])<8)
                $error.="</br>Please enter a password with at least 8 chars.";
            if(!preg_match('`[A-Z]`', $_POST['password']))
                $error.="</br>Please enter a passord with a least one CAPITAL letter";
        }
        if($error) $errors = "There were error(s) in Your submission".$error;
        else{
            $query ="SELECT email FROM users WHERE email = '".mysqli_real_escape_string($link,$_POST['email'])."';";
            $result = mysqli_query($link,$query);
            $results = mysqli_num_rows($result);
            if($results)
                $sumsg = "That email is already registered. Do you want to log-in instead";
            else{
                $query2 = "INSERT INTO users (username,email,password) VALUES ('".mysqli_real_escape_string($link,$_POST['username'])."','".mysqli_real_escape_string($link,$_POST['email'])."','".md5($_POST['password'])."');";
                mysqli_query($link,$query2);
                $_SESSION['id']=mysqli_insert_id($link);
                $sumsg2 = "Successful sign up";
            }
            if($sumsg) $errors=$sumsg;
        }
    }

    if ($_POST['submit']=="Log in")
    {
        $query="SELECT * FROM users WHERE email ='".mysqli_real_escape_string($link,$_POST['loginemail'])."' AND password ='".md5($_POST['loginpassword'])."' LIMIT 1;";
        $result=mysqli_query($link,$query);
        $row= mysqli_fetch_array($result);
        if(!$row)
        {
            $limsg = "No user with that email and password combination!".$row;
        }
        else
        {
            $_SESSION['id']=$row['id'];
            $_SESSION['username']=$row['username'];
            header("Location:mainpage.php");
        }
        if($limsg) $errors = $limsg;
    }
/**
 * Created by PhpStorm.
 * User: Gabriel
 * Date: 24.6.2015.
 * Time: 13:52
 */
?>