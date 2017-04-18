
<?php
$myArray = explode('/', $_GET['Name']);
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
  <li class="active"><a href="admin_index.php">Home</a></li>
  <li><a href="registration.php">Add_Student</a></li>
  <li><a href="add_problem.php">Add_Problem</a></li>
  <li><a href="event.php">Event</a></li>
  <li><a href="questions.php">View_Problems</a></li>
<li><a href="admin_submission.php?NAME=default">Submissions</a></li>
<li><a href="event_submission.php?Name=EVNT001">Event_Submissions</a></li>
<li><a href="logout.php">Logout</a></li>
</ul>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-2 sidenav">
<ul class="nav nav-pills nav-stacked">
<?php
while($row= mysqli_fetch_array($result))
            {
	if( strpos( $row[0], "EVNT" ) !== false ) {
		if( strpos( $row[0], "_" ) === false ) {
	$event=$row[0]."/default";
	echo " <li><a  href=event_submission.php?Name=$event>$row[0]</a></li>";
	}
}
}
?>
</div>
<div class="col-sm-9">
 <h3><b><i> Submissions</i></b></h3>

 <select  id="attribute" onchange="color_click();" >
		<option value="default">Sort_Submission</option>
               	       <option value="id">Submission_id</option>
              	        <option value="date">Date</option>
	 	
                      	<option value="problem_id">Code_id</option>
              </select></br>

<div class="table-responsive">
        <table class="table" border="0" align="center">
            <col width="10%">
            <col width="10%">
            <thead class="thead-inverse" style="color: black">
<tr>
<th> Roll_Number</th>
<th> Code_Id </th>
<th> Submission_Id </th>
<th> Date </th>
<th> Result </th>
<th> Time </th>
<th> Runtime </th>
<th> Memory </th>
<th> Language </th>
<th> Solution </th>
</tr>
</thead>
<tbody>
<?php
if($myArray[1]=="default")
	{
$query = "SELECT * FROM $myArray[0]";
	}
else
	{
$query = "SELECT * FROM $myArray[0] order by $myArray[1]";	
	}
$result = mysqli_query($dbConn, $query) or die(mysqli_error($dbConn));


while ($row = mysqli_fetch_array($result)) {

echo ' <tr> ';
echo ' <td> ' . $row[0] . ' </td> ';
echo ' <td> ' . $row[1] . ' </td> ';
echo ' <td> ' . $row[2] . ' </td> ';
echo ' <td> ' . $row[3] . ' </td> ';
echo ' <td> ' . $row[4] . ' </td> ';
echo ' <td> ' . $row[5] . ' </td> ';
echo ' <td> ' . $row[6] . ' </td> ';
echo ' <td> ' . $row[7] . ' </td> ';
echo ' <td> ' . $row[8] . ' </td> ';
echo ' <td><a  href=problem_solution.php?Name='.$row[9].'>Link</a></td>';
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

    
 <script>

function color_click(){
 var myVar = document.getElementById('attribute').value;
 var simple = '<?php echo $myArray[0]; ?>';
 window.location.href="event_submission.php?Name="+simple+"/"+myVar;

 
}
</script>
</body>       
</html>

