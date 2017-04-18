<?php
	session_start();
	$roll=$_SESSION['userroll'];
	$action=0;
	$targetfolder = "/var/www/html/iiitg_portal/";
	$targetfolder = $targetfolder . basename( $_FILES['file']['name']) ;
	if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder))
   		$action=1;
	require 'config.php';
	$code_id=$_GET['Code_id'];
	$dir="practice_solution/";
	$count="ls ".$dir." | wc -l";
	$sum=shell_exec($count);
	$sum=intval($sum);
	$date=date("Y-m-d");
	$time=date("h:i:s");
	$sum=$sum+1;
	$filesol=$dir."SOL".$sum.".txt";
	$permission="chmod -R 777 practice_solution/";
	$submission=$sum;
	shell_exec($permission);
	$languageID=$_POST["language"];
	
	switch($languageID)
        	{
                case "C":
                	{      
                        $filename_code="main.c";
                        $file_code=fopen($filename_code,"w+");
			if($action==1)
			 	{
                                fwrite($file_code,file_get_contents(basename( $_FILES['file']['name'])));
				fclose($file_code);
				}
			else
				{
				$code=$_POST["code"];
				fwrite($file_code,$code);
   				fclose($file_code);
				}	
                                include("compilers/c.php");
                                break;
                         }
	   case "Python":
                         {
                         $filename_code="main.py";
                         $file_code=fopen($filename_code,"w+");
			 if($action==1)
				{
                                fwrite($file_code,file_get_contents(basename( $_FILES['file']['name'])));
				fclose($file_code);
				}
			else
				{
				$code=$_POST["code"];
				fwrite($file_code,$code);
   				fclose($file_code);
				}
                                       
                                include("compilers/py.php");
                                break;
                           }

                case "C++":
                          {      
                          $filename_code="main.cpp";
                          $file_code=fopen($filename_code,"w+");
			  if($action==1)
				{
                                fwrite($file_code,file_get_contents(basename( $_FILES['file']['name'])));
				fclose($file_code);
				}
			  else
				{
				$code=$_POST["code"];
				fwrite($file_code,$code);
   				fclose($file_code);
				}
                                include("compilers/cpp.php");
                                break;
                           }
		case "Java":
                           {
			   if($action==1)
				{
			        $filename_code=basename($_FILES['file']['name']);
				$name=basename($filename_code,".java");
 			        $out="java"." ".$name;
				}
			   else
                                {
				$filename_code="main.java";
                                $file_code=fopen($filename_code,"w+");
				$code=$_POST["code"];
				fwrite($file_code,$code);
   				fclose($file_code);
				
				}
                                include("compilers/java.php");
                                break;
                           }

                   }
?>



