<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require 'config.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="bootstrap.min.css">
        <link rel="stylesheet" href="portal_design.css">
        <script src="jquery.min.js"></script>
        <script src="bootstrap.min.js"></script>
        <title>Code here ;)</title>
        <link rel='icon' href='IIITGLogo2.png'>
        <script type="text/javascript">
            function checkPass()
{
    var x = document.getElementById("repass");
    var y = document.getElementById("pass");
    x.setAttribute("pattern",y.value);
    
}

        </script>
    </head>
    <body>
        <div class="container-fluid" id="op_background">
            <form id="loginform" style="margin-left: -20%" action="update_pass.php" method="post">
                <input type="text" name="upd_roll" placeholder="Enter your rollnumber..">
                <input type="password" name="uPass" id="pass" required placeholder="Enter new Password .." onkeyup="checkPass()">
     <input type="password" name="reuPass" id="repass" placeholder="Renter new Password.."  title="The password typed Earlier!" >
     <input type="submit" name="Update password!" value="Update Record">      
</form>
        </div>
    </body>
</html>
