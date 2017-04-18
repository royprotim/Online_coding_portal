
<?php
require 'config.php';
require 'admin_layout.php';
$var=$_GET['NAME'];
?>
<h3><b><i> Submissions</i></b></h3>

 <select  id="attribute" onchange="color_click();"  style="float:right;">
		<option value="default">Sort_Submission</option>
               	       <option value="id">Submission_id</option>
              	        <option value="date">Date</option>
	 	 <option value="user_id">Roll_number</option>
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
if($var=="default")
	{
$query = "SELECT * FROM practice_solution";
	}
else
	{
$query = "SELECT * FROM practice_solution order by $var";	
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
echo ' <td><a  href=admin_problem_solution.php?Name='.$row[9].'>Link</a></td>';
echo ' </tr> ';
}

?>
</tbody>
</div>
     
</table>

<script>

function color_click(){
 var myVar = document.getElementById('attribute').value;
 window.location.href="admin_submission.php?NAME=" + myVar;

} 

</script>

</body>
</html>
