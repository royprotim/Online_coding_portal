<?php
session_start();
require 'layout.php';
require 'config.php';
?>

              
<?php
$var = $_GET['var'];
$myArray = explode('/', $var);
$roll=$_SESSION['userroll'];
$query1 = "SELECT * FROM $myArray[0] where user_id='$roll'";
$result1 = mysqli_query($dbConn, $query1) or die(mysqli_error($dbConn));

?>
<h3><b><i> Previous Solutions</i></b></h3>
<div class="table-responsive">
        <table class="table" border="0" align="center">
            <col width="10%">
            <col width="10%">
            <thead class="thead-inverse" style="color: black">
<tr>
<th>Problem_id</th>
<th> Sol_Id </th>
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
while ($row = mysqli_fetch_array($result1)) {

echo ' <tr> ';
echo ' <td> ' . $row[1] . ' </td> ';
echo ' <td> ' . $row[2] . ' </td> ';
echo ' <td> ' . $row[3] . ' </td> ';
echo ' <td> ' . $row[4] . ' </td> ';
echo ' <td> ' . $row[5] . ' </td> ';
echo ' <td> ' . $row[6] . ' </td> ';
echo ' <td> ' . $row[7] . ' </td> ';
echo ' <td> ' . $row[8] . ' </td> ';
echo ' <td><a  href=user_problem_solution.php?Name='.$row[9].'>Link</a></td>';
echo ' </tr> ';
}
?>
</tbody>
</div>
     
</table>




