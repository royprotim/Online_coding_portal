
$Event=$_POST["Event"];
$Dir=$Event.'_problem';
$query = "CREATE TABLE $Dir(Code_id VARCHAR(255) not null,Name VARCHAR(255) not null,out_location VARCHAR(255) not null,location VARCHAR(255) not null,in_locaton VARCHAR(255) not null);";
mysqli_query($dbConn, $query) or die (mysqli_error($dbConn));

