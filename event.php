<?php
require 'config.php';
require 'admin_layout.php';
?>

<div class="container-fluid" style="margin: 5%">
       
       
            <div class="table-responsive">
        <table class="table" border="0" align="center" style="width: 80%">
            <col width="20%">
            <col width="20%">
            <col width="30%">
            <col width="30%">

          <thead class="thead-inverse" style="color:black"><tr><th>Event_id</th><th>Event_Name</th><th>Start_time</th><th>End_time</th></tr></thead>
        <tbody>
   <?php 
            $query2 = "select * from practice_event";
            $result2 = mysqli_query($dbConn,$query2);
            while($row2 = mysqli_fetch_array($result2))
            {
                printf("<tr><td><a  href=\"add_event_question.php?Name=".$row2[0]."\">".$row2[0]."</a></td><td>$row2[1]</td><td>$row2[2]</td><td>$row2[3]</td></tr>");
            }
            
            ?>
        </tbody>
        </table>
            </div>
    </div>
              
</html>

