
<?php
session_start();
require 'config.php';
require 'layout.php';
$roll=$_SESSION['userroll'];
?>
<h3><b><i> Submissions</i></b></h3>
<div class="table-responsive">
        <table class="table" border="0" align="center">
            <col width="10%">
            <col width="10%">
            <thead class="thead-inverse" style="color: black">
<tr>
<th> Code_Id </th>
<th>Submission_id</th>
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
$query = "SELECT * FROM practice_solution where user_id='$roll'";
$result = mysqli_query($dbConn, $query) or die(mysqli_error($dbConn));


while ($row = mysqli_fetch_array($result)) {

echo ' <tr> ';
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
