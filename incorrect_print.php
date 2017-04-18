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
				body {
				    background-image: url("i.png");
				    background-repeat: no-repeat;
				    background-attachment: fixed;
                    background-size: 80% auto
                    max-width: 50%;
                    height: auto;
				}
        		</style>
    		</head>
    		<body>
          <ul class="nav nav-tabs" >
  <li class="active"><a href="index.php">Home</a></li>
  <li><a href="mainpage.php">Problems</a></li>
  
  <li><a href="contest.php">Contest</a></li>
 
  <li><a href="questions.php">ViewSubmissions</a></li>
<li><a href="logout.php">Logout</a></li>
</ul>
<div class="table" style="max-width: 50%;margin: 3%">
<table width="300px" border="0">

<tr>
<th><h2><b><i> Details :</i></b></h2></th>
</tr> <tr>
<td><b><i>Result:</i></b></td>
<td><b> <?php echo htmlspecialchars($result);?> </b></td>
</tr> <tr>
<td> <b><i>Time:</i></b> </td>
<td> <?php echo htmlspecialchars($time);?> </td>
</tr> <tr>
<td><b><i>Date:</i></b></td>
<td> <?php echo htmlspecialchars($date);?> </td>
</tr> <tr>
<td><b><i>RunTime:</i></b> </td>
<td> <?php echo htmlspecialchars($runtime);?> </td>
</tr> <tr>
<td> <b><i>Memory:</i></b> </td>
<td> <?php echo htmlspecialchars($memory);?> </td>
</tr> <tr>
<td> <b><i>Language:</i></b></td>
<td> <?php echo htmlspecialchars($languageID);?> </td>
</tr> 
</table>
</div>
<div class="container-fluid">
<a id="linkstyle" href="pages.php?var=<?php echo $Dir ?>">Previous solutions for this problem</a>
</div>
</body>
</html>
