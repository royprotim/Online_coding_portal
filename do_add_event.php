<?php
$start= $_POST['start_date'];
$end=$_POST['end_date'];
$name=$_POST['event_name'];
session_start();
require 'config.php';
$query = "select max(event_code) from practice_event";
$result = mysqli_query($dbConn,$query);
$row = mysqli_fetch_array($result);
$var = intval(trim($row[0],"EVNT"));
$var++;
$event_code = "EVNT".sprintf("%03d",$var);
$query2 = "insert into practice_event values('$event_code','$name','$start','$end')";
$result = mysqli_query($dbConn, $query2) or die(mysqli_error($dbConn));
include("event.php");
?>

