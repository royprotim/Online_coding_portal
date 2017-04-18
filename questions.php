<?php
session_start();
require 'config.php';
require 'admin_layout.php';      
?>

    
<?php
/*        
if(isset($_POST['Submit'])||isset($_SESSION['admin_name']))
{
	
        $query = "select * from admin_login where username = \"".$_POST['admin_name']."\" and password = \"".$_POST['admin_pass']."\"";
        
        if($result = mysqli_query($dbConn,$query))
        {
            $row = mysqli_fetch_array($result);
            //printf("Welcome Admin!!!");
            if(!isset($_SESSION['admin_name']))
            {   $_SESSION['login']=true;
                $_SESSION['admin_name']=$row[0];
            }
*/            ?>
    <div class="container-fluid" style="margin: 5%">
       
       
            <div class="table-responsive">
        <table class="table" border="0" align="center" style="width: 80%">
            <col width="40%">
            <col width="40%">
            <col width="10%">
            <col width="10%">

            <thead class="thead-inverse" style="color: white"><tr><th>Problem</th><th>Problem Code</th></tr></thead>
        <tbody>
            <?php 
            $query2 = "select * from practice_problem";
            $result2 = mysqli_query($dbConn,$query2);
            while($row2 = mysqli_fetch_array($result2))
            {
                printf("<tr><td><a  href=\"../portal/problem_definition.php?Name=".$row2[0]."\">".$row2[1]."</a></td><td><a href=\"terminal123.php?Code_id=".$row2[0]."\">".$row2[0]."</a></td><td>  <a href=\"do_add.php?Name=".$row2[0]."\">Edit</a> 
</td><td><a>Delete</a></td></tr>");
            }
       
            ?>
        </tbody>
        </table>
            </div>
    </div>
             

</html>
</body
