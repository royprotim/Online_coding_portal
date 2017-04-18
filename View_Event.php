<?php
require 'config.php';
$var=$_GET['Name'];
$pb=$_POST['problem'];
$query1 = "insert into event_problem values(\"".$var."\",\"".$_POST['problem']."\")";
mysqli_query($dbConn,$query1);
$table=$var."_Ranking";

$query2="show tables";
$result2 = mysqli_query($dbConn,$query2);
$count=0;
while($row2= mysqli_fetch_array($result2))
            {
	if( strpos( $row2[0], $table ) !== false ) {
		$count=$count+1;
		}
}
if($count==0)
	{
	$query3="create table $table(user_id INTEGER UNSIGNED not null)";
	mysqli_query($dbConn,$query3);
	}

$query4="ALTER TABLE $table ADD $pb varchar(20) NULL AFTER `user_id`";
mysqli_query($dbConn,$query4);
include("add_event_question.php");
?>
