<?php
require 'config.php';
$var=$_GET['Name'];
$myArray = explode('/', $var);
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
<li><a href="logout.php">Logout</a></li>
</ul>
<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-2 sidenav">
     
<ul class="nav nav-pills nav-stacked">
<?php 
            $query2 = "select * from event_problem where event_code='$myArray[0]'";
            $result2 = mysqli_query($dbConn,$query2);

            while($row2 = mysqli_fetch_array($result2))
            {
           $query3 = "select * from practice_problem where problem_id='$row2[1]'";
           $result3 = mysqli_query($dbConn,$query3);
           $row3 = mysqli_fetch_array($result3);
	if($row3[1]!="")
		{
		$row2[1]=$myArray[0]."/".$row2[1];

		echo " <li><a  href=problem_definition_event.php?Name=$row2[1]>$row3[1]</a></li>";
		}           		
      
            }
            
     ?>

</ul>
 </div>
   



<div class="col-sm-9">
      <h4><small>RECENT POSTS</small></h4>
            <?php

$query = "select problem_def from practice_problem where problem_id =\"".$myArray[1]."\"";

if($result = mysqli_query($dbConn,$query))
{
    $row = mysqli_fetch_array($result);
    $myfile = fopen($row[0], "r") or die("Unable to open file!");
while(!feof($myfile)) {
  echo "<b>".fgets($myfile) . "<br>"."</b>";
}
fclose($myfile);
    ?> 
          
  <a id="buttondesign" style="right:  5%;bottom: 5%" data-spy="affix" href="terminal123.php?Code_id=<?php printf($_GET['Name']) ?>">Submit Code</a>
        
        <?php
}



?>
     
            </div>
          </div>
        </div>
     


</body>
</html>
