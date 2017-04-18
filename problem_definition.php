<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <link rel="stylesheet" href="bootstrap.min.css">
<link rel="stylesheet" href="bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" href="portal_design.css">
        <script src="jquery.min.js"></script>
        <script src="bootstrap.min.js"></script>
        <title>Code here ;)</title>
        <link rel='icon' href='IIITGLogo2.png'>
        <style>
            h2,h3,h4,h5,h6{
                color: #000080;
            }
        </style>
    </head>
    <body>
<ul class="nav nav-tabs" >
  <li class="active"><a href="index.php">Home</a></li>
  <li><a href="mainpage.php">Problems</a></li>
  
  <li><a href="contest.php">Contest</a></li>
 
   <li><a href="submission.php">ViewSubmissions</a></li>
<li><a href="logout.php">Logout</a></li>
</ul>
        
        <div class="container-fluid"  style="max-width: 50%;margin: 3%">
           
<?php

require 'config.php';
if(isset($_GET['Name'])){
$query = "select location from Sample_problem where Code_id =\"".$_GET['Name']."\"";

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

else
{
    printf("<h3>Sorry No Problem found...... Please check the problem name!!!!</h3>");
}

}
else
{
    header("Location: ./index.php");
}

?>
</div>
</body>
</html>
