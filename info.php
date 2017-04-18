<?php
session_start();
require 'config.php';
$var1=$_SESSION['userroll'] = $_POST['std_roll'];
$var2=$_SESSION['userpass'] = $_POST['std_pass'];

$query = "select * from user_login where username = '$var1' and password = '$var2'";
$result = mysqli_query($dbConn,$query) or die ('Error updating database: '.mysqli_error());
$row = mysqli_fetch_array($result);
if($row[2]==1)
	{

	include('portal_index.php');
	}
else if($row[2]==2)
	{
	include('admin_index.php');
	}
else
	{
	include ('logout.php');
	}


?>
