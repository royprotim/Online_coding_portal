<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
<?php 
require 'config.php';
?>
<html>
    <head>
        <link rel="stylesheet" href="bootstrap.min.css">
        <link rel="stylesheet" href="portal_design.css">
        <script src="jquery.min.js"></script>
        <script src="bootstrap.min.js"></script>
        <title>Code here ;)</title>
        <link rel='icon' href='IIITGLogo2.png'>
        <meta http-equiv="refresh" content="5;url=index.php" /></head>
    <body>
<?php

printf("Hi there!!");
if(isset($_POST['Submit']))
{
    printf("Hi there!!");
    $encyp_pass = md5($_POST['uPass']);
    $query="insert into logincheck values(\"".$_POST['new_roll']."\",\"".$encyp_pass."\")";
    $query2 = "insert into ranking(`roll`) values(\"".$_POST['newroll']."\")";
    if(mysql_query($query)&&  mysql_query($query2))
    {
        printf("<h1>your data entered! Redirecting in 5 seconds!</h1>");
    }
    else
    {
        printf("Sorry some problem!<br> Maybe you are already registered! <br> Try Loging in or Forgot Password! ");
    }
    
}
 else {
     header("Location: ./index.php");
}
?>
    </body>
</html>
