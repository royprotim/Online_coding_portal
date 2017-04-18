<?php
	session_start();
	require 'config.php';
	require 'layout.php';
?>
        <div class="table-responsive">
        <table class="table" border="0" align="center">
        <col width="65%">
        <col width="65%">
        <thead class="thead-inverse" style="color: black"><tr><th>Problem</th><th>Problem Code</th></tr></thead>
        <tbody>
            <?php 
            $query2 = "select * from practice_problem";
            $result2 = mysqli_query($dbConn,$query2);
            while($row2 = mysqli_fetch_array($result2))
            {
 printf("<tr><td><a href=\"problem_definition.php?Name=".$row2[0]."\">".$row2[1]."</a></td><td><a href=\"terminal123.php?Code_id=".$row2[0]."\">".$row2[0]."</a></td></tr>");
            }
            
            ?>
        </tbody>
        </table>
            </div>
  
    </body>
</html>
    
