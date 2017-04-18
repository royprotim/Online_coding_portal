<?php
   
ini_set('display_errors', 1);
error_reporting(E_ALL);
            $dbUser = "root";
            $pass = "mummyilu";
            $database = "iiitg_portal";
            $dbHost = "127.0.0.1";
           
            $dbConn = mysqli_connect($dbHost,$dbUser,$pass) or die(mysql_error()) ;
            //echo "After Connect!:".$dbConn->;
            if($dbConn)
            {
                mysqli_select_db($dbConn,$database);                
            }
            else{
                die("<strong>Error</strong>Could not connect to database!");
            }
        ?>
