<?php
$db = mysql_connect('localhost','root', 'mummyilu') or
die ('Unable to connect. Check your connection parameters.');
mysql_select_db('iiitg_portal', $db) or die(mysql_error($db));
$code_id=$_GET['Code_id'];
echo $code_id;
$query = "SELECT in_location,out_location from Problem_check where Code_id='$code_id'";
$result = mysql_query($query, $db) or die(mysql_error($db));
$row = mysql_fetch_assoc($result);
echo "hello";
?>
