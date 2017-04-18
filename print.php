<html>
    <head>
<link rel="stylesheet" href="bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" href="bootstrap.min.css">
        <link rel="stylesheet" href="portal_design.css">
        <script src="jquery.min.js"></script>
        <script src="bootstrap.min.js"></script>
        <title>Code here ;)</title>
        <link rel='icon' href='IIITGLogo2.png'>
<style>
	body{
		background-image: url(soft.jpg);
		background-size: 100%;
    		background-repeat: no-repeat;
    		opacity: 0.8;
		}
</style>

 </head>    

 <body>
	
	</body>       


<td>
<table class="table">
<tr>
<th colspan="2" > Details </th>
</tr> <tr>
<td> Result: </td>
<td> <?php echo htmlspecialchars($result);?> </td>
</tr> <tr>
<td> Time: </td>
<td> <?php echo htmlspecialchars($time);?> </td>
</tr> <tr>
<td> Date: </td>
<td> <?php echo htmlspecialchars($date);?> </td>
</tr> <tr>
<td> RunTime: </td>
<td> <?php echo htmlspecialchars($runtime);?> </td>
</tr> <tr>
<td> Memory: </td>
<td> <?php echo htmlspecialchars($memory);?> </td>
</tr> <tr>
<td> Language: </td>
<td> <?php echo htmlspecialchars($languageID);?> </td>
</tr> 
</table>
</td>
<input type="button" onClick="window.location='pages.php?var=<?php echo $Dir ?>'">
</div>
</body>
</html>

