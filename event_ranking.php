<?php
$str="Score";
$myArray = explode('_', $_GET['Name']);
$var=$myArray[0]."_Ranking";

require 'config.php';
$query="show tables";
$result = mysqli_query($dbConn,$query);
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="bootstrap.min.css">
<link rel=stylesheet href="code/doc/docs.css">
<link rel="stylesheet" href="bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" href="portal_design.css">
        <script src="jquery.min.js"></script>
        <script src="bootstrap.min.js"></script>
        <title>Code here ;)</title>
        <link rel='icon' href='IIITGLogo2.png'>

 
<style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 1000px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }
  </style>

</head>
<body>

<ul class="nav nav-tabs" >
  <li class="active"><a href="portal_index.php">Home</a></li>
  <li><a href="mainpage.php">Problems</a></li>
  <li><a href="contest.php">Contest</a></li>
  <li><a href="submission.php">ViewSubmissions</a></li>
<li><a href="event_ranking.php?Name=EVNT001_Ranking">Ranking</a></li>
<li><a href="logout.php">Logout</a></li>
</ul>
<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-2 sidenav">
<ul class="nav nav-pills nav-stacked">
 <h3><b> Events</b></h3>
<?php
while($row= mysqli_fetch_array($result))
            {
	if( strpos( $row[0], "_Ranking" ) !== false ) {
		$myArray1 = explode('_', $row[0]);
	echo " <li><a  href=event_ranking.php?Name=$row[0]>$myArray1[0]</a></li>";
	}

}
?>
</div>
<div class="col-sm-9">
 <h3><b><i> Submissions</i></b></h3>
<div class="table-responsive">
        <table class="table" border="0" align="center">
                 <thead class="thead-inverse" style="color: black">
<tr>
<th> Roll_Number</th>
<?php
$count=1;
$q="select * from event_problem where event_code='$myArray[0]'";
$r= mysqli_query($dbConn, $q) or die(mysqli_error($dbConn));
while ($r1 = mysqli_fetch_array($r)) {
$count=$count+1;
echo '<th>'.$r1[1].'</th>';
}
echo '<th>'.$str.'</th>';
?>
</tr>
</thead>
<tbody>
<?php
$query = "SELECT * FROM $var";	
$result = mysqli_query($dbConn, $query) or die(mysqli_error($dbConn));
while ($row = mysqli_fetch_array($result)) {
	echo ' <tr> ';
	$total=0;
	for($i=0;$i<$count;$i++)
		{
		echo ' <td> ' . $row[$i] . ' </td> ';
		if($i!=0)
			$total=$total+$row[$i];
		}	


echo ' <td> ' . $total . ' </td> ';
echo ' </tr> ';	
}

?>
</tbody>
</div>
     
</table>


            </div>
    </div>
 </div>
          </div>
        </div>

    

</body>       
</html>

