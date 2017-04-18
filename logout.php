<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="refresh" content="0;url=index.php" />
	<title>Logout</title>
</head>
<body>
<?php
session_unset();
echo "Logged Out Successfully!! Returning to index page!";
header("Location : index.php");

?>
</body>
</html>
