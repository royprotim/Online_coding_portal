<?php
require 'layout.php';

echo "<pre>$error</pre>";
?>
<div class="container-fluid" style="margin: 3%">      
<div class="table-responsive">
<table class="table" border="0" align="center" style="width: 80%">
<h2>Submission Output:<?php echo $code_id ?></h2>
<col width="20%">
<thead class="thead-inverse" style="color:black"><tr><th>Test_Cases</th><th>Runtime_Time</th><th>Memory_usage</th><th>Result</th></tr>
</thead>
<tbody>
<?php 
$var=0;
if( strpos( $_GET['Code_id'], $SOURCE ) !== false )
{
$query3 = "select * from $sub where submission_id='$submission'";
}
else
{
$query3 = "select * from practice_submission where submission_id='$submission'";
}
$result3 = mysqli_query($dbConn,$query3);
while($row3 = mysqli_fetch_array($result3))
            {
	$var=$var+1;
	$temp="TEST#".$var;
              printf("<tr><td>$temp</td><td>$row3[1]</td><td>$row3[2]</td><td>$row3[3]</td></tr>");
            }
            
?>
</tbody>
</table>
</div>
<?php
if( strpos( $_GET['Code_id'], $SOURCE ) !== false )
{
?>
<a class="btn btn-default" href="event_pages.php?var=<?php echo $code_id; ?>">Submissions</a></button>
<?php
}
else
{
?>
<a class="btn btn-default" href="pages.php?var=<?php echo $code_id; ?>">Submissions</a></button>
<?php
}
?>

</div>
</div>

</body>
</html>
