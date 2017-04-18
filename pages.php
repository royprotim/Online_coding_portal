<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">

<?php
session_start();
require 'config.php';
require ('layout.php');
?>
<?php
$var = $_GET['var'];
$roll=$_SESSION['userroll'];
$query1 = "SELECT * FROM practice_solution where user_id='$roll' and problem_id='$var'";
$result1 = mysqli_query($dbConn, $query1) or die(mysqli_error($dbConn));

?>

<h3><b><i> Previous Solutions</i></b></h3>
<div class="table-responsive">
        <table class="table" border="0" align="center">
            <col width="10%">
            <col width="10%">
            <thead class="thead-inverse" style="color: black">
<tr>
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




