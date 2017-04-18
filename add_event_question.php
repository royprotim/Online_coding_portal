<?php
$var=$_GET['Name'];
require 'config.php';
$query2 = "select * from practice_problem";
$result2 = mysqli_query($dbConn,$query2);
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
  <li><a href="admin_submission.php">Submissions</a></li>
<li><a href="logout.php">Logout</a></li>
</ul>
<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-2 sidenav">
<?php
echo '<form action="View_Event.php?Name='.$var.'" method="post" enctype="multipart/form-data">';
?>
<p>Select Problem :
<select name="problem" class="button1"  id="problem" >
<?php
while($row2 = mysqli_fetch_array($result2))
            {
	echo "<option value='$row2[0]'>$row2[1]</option>";
	}

?>
</select></p>
 <input type="submit" class="button" value="Submit" id="submit">
</div>
<div class="col-sm-9">
 <h4><small>Event </small></h4>
<div class="container-fluid" style="margin: 3%">
       
       
            <div class="table-responsive">
        <table class="table" border="0" align="center" style="width: 80%">
            
            <col width="30%">
             <col width="30%">
         <thead class="thead-inverse" style="color:black"><tr><th>Problem_id</th><th>Problem_Name</th></tr></thead>
        <tbody>
   <?php 
            $query3 = "select * from event_problem where event_code='$var'";
            $result3 = mysqli_query($dbConn,$query3);
            while($row3 = mysqli_fetch_array($result3))
            {
	 $query4 = "select * from practice_problem where problem_id='$row3[1]'";
	 $result4 = mysqli_query($dbConn,$query4);
		$row4 = mysqli_fetch_array($result4);
	
                printf("<tr><td>$row3[1]</td><td>$row4[1]</td></tr>");
            }
            
            ?>
        </tbody>
        </table>
            </div>
    </div>
 </div>
          </div>
        </div>
     
              
</html>

