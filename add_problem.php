<?php
session_start();
require 'admin_layout.php';
?>
        <div class="form" style="max-width: 50%;margin: 5%">
           <div class="form" style="max-width: 50%;margin: 5%">
            <form action="do_add.php" method="post" enctype="multipart/form-data">
               
                    <b><i> Problem Name :</i></b>
                        <input type="text" name="prblm_name" id="prblm_name">
                    </br> 
                    </br>
                    <b><i> Problem Setter :</i></b>
                        <input type="text" name="prblm_setter" id="prblm_setter">
                    </br> 
                    </br>
                    <b><i>  Running_Time  :</i></b>
                        <input type="text" name="Running_Time" id="Running_Time">
                    </br>
                    </br> 
                    <b><i> Memory_usage    :</i></b>
                        <input type="text" name="Memory_usage" id="Memory_usage">
                    </br> 
                    </br>              
                   <b><i>Upload Definition File :</i></b>
                    <input type="file" name="def_file" id="def_file">
                    </br>
                   
                        <input type="submit" name="AddProblem">
                        <input type="reset" name="Reset">
                   </br>
        </form>
        </div>
        
    </body>
</html>
