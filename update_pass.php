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


if(isset($_POST['Submit']))
{
    
    $encyp_pass = md5($_POST['uPass']);
    $query="update logincheck set pass = \"".$_POST['uPass']."\" where roll=\"".$_POST['upd_roll']."\"";
    
    if(mysql_query($query))
    {
        printf("<h1>your password updated! Redirecting in 5 seconds!</h1>");
    }
    else
    {
        printf("Sorry no record found please register! Redirecting in 5 seconds!");
    }
    
}
 else {
     header("Location: ./index.php");
}
?>
    </body>
</html>