<?php
require 'config.php';
$def_location = "practice_problems/";
$in_location = "practice_in_cases/";
$out_location = "practice_out_cases/";
if(isset($_POST['AddProblem']))
	{
	$query = "select max(problem_id) from practice_problem";
	$result = mysqli_query($dbConn, $query) or die(mysqli_error($dbConn));
	$row = mysqli_fetch_array($result);
	$var = intval(trim($row[0],"PBLM"));
	$var++;
	$pblm_code = "PBLM".sprintf("%03d",$var);	
	$newfilename = $pblm_code.".txt";
	$location=$def_location.$newfilename;
	$var1=$_POST['prblm_name'];
	$var2= $_POST['prblm_setter'];
	$var3=$_POST['Running_Time'];
	$var4= $_POST['Memory_usage'];

	if(move_uploaded_file($_FILES['def_file']['tmp_name'], $location))
        		{	                
		$query1 ="insert into practice_problem values('$pblm_code','$var1','$var2','$var3','$var4','$location')";
		$result = mysqli_query($dbConn, $query1) or die(mysqli_error($dbConn));
		}
	}
else if(isset($_POST['submit']))
	{
	$count="ls ".$in_location." | wc -l";
	$sum=shell_exec($count);
	$sum=intval($sum);
	$sum=$sum+1;
	$marks=20;
	$pblm_code=$_GET['Name'];
	$newfilename1 = $sum.".txt";
	$newfilename2 = $sum.".txt";
	$location1=$in_location.$newfilename1;
	$location2=$out_location.$newfilename2;
	if(move_uploaded_file($_FILES['in_file']['tmp_name'], $location1))

        		{	  
              	if(move_uploaded_file($_FILES['out_file']['tmp_name'], $location2))
			{
			
			$query1 ="insert into test_cases values('$pblm_code','$location1','$location2','$marks')";
			$result = mysqli_query($dbConn, $query1) or die(mysqli_error($dbConn));
			}
		}
	
	}
else
	{
	$pblm_code=$_GET['Name'];
	}

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
<li><a href="logout.php">Logout</a></li>
</ul>
<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-2 sidenav">
<?php
echo '<form action="do_add.php?Name='.$pblm_code.'" method="post" enctype="multipart/form-data">';
?>
</br>
</br>
<b><i>Upload Input Test File :</i></b>
                    <input type="file" name="in_file" id="in_file">
                    </br>
<b><i>Upload Output Test File :</i></b>
                    <input type="file" name="out_file" id="out_file">
                    </br>
 <input type="submit" class="button" name="submit" value="Submit" id="submit">
</div>
<div class="col-sm-9">
 <h4><small>	Test Cases </small></h4>
<div class="container-fluid" style="margin: 3%">
       
       
            <div class="table-responsive">
        <table class="table" border="0" align="center" style="width: 80%">
            
            <col width="30%">
             <col width="30%">
         <thead class="thead-inverse" style="color:black"><tr><th>Input_Cases</th><th>Output_Cases</th></tr></thead>
        <tbody>
   <?php 
            $query3 = "select * from test_cases where problem_id='$pblm_code'";
            $result3 = mysqli_query($dbConn,$query3);
            while($row3 = mysqli_fetch_array($result3))
            {
                printf("<tr><td>$row3[1]</td><td>$row3[2]</td></tr>");
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
?>
