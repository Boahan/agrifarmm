<?php
session_start();
if(!isset($_SESSION['auth']))
{
    echo $_SESSION['auth_status']="Login To Access Dashboard";
    header("location: login.php");
    exit(0);
}
else
{
    if($_SESSION['auth'] == "1")
    {
        echo $_SESSION['auth_status']="Login To Access Dashboard";
        header("location: login.php");
        exit(0);
    }
    else
    {
        // $_SESSION['status']="You are not authorised as ADMIN";
        // header("location: ../index.php");
        // exit(0);
       
    }
}


?>