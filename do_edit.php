<?php
session_start();?>
<html>
<body>
<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if(isset($_POST['Update'])||isset($_SESSION['login']))
{
    echo "Welcome Dude ;)";
    $def_location = "/var/www/html/portal/problems/";
    $in_location = "/var/www/html/portal/in_cases/in_";
    $out_location = "/var/www/html/portal/out_cases/out_";
    $filename = $_SESSION['id']."txt";
    rename(basename($_FILES['def_file']['name']), basename($filename));
    //echo "before loop";
    if(isset($_FILES['def_file']))
    {   //echo "In loop!";
        if(move_uploaded_file($_FILES['def_file']['tmp_name'], $def_location.$filename))
    {
        echo "Definition file uploaded!";
    }}
    if(isset($_FILES['in_file']))
    {if(move_uploaded_file($_FILES['in_file']['tmp_name'], $def_location.$filename))
    {
        echo "Input file uploaded!";
    }}
    if(isset($_FILES['out_file'])
    {if(move_uploaded_file($_FILES['out_file']['tmp_name'], $def_location.$filename))
    {
        echo "output file uploaded!";
    }}
}
else
{echo "Some problem";}
?>
</body>
</html>
