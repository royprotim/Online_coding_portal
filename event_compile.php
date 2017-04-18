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
	$myArray = explode('/', $code_id);
	$languageID=$_POST["language"];
	$dir=$myArray[0];
	$Dir=$myArray[0];
	$sub=$Dir."_Submission";
	$temp="[ ! -d ".$dir." ]";
	$make="mkdir -p ".$dir;
	$count="ls ".$dir." | wc -l";
	$Rresult=$temp." && ".$make;
	shell_exec($Rresult);//submission_id`,`run_time`,`mem_usage`,`result`
	$sum=shell_exec($count);
	$sum=intval($sum);
	if($sum==0)
		{
$query = "CREATE TABLE $Dir(user_id VARCHAR(25) not null,problem_id VARCHAR(25) not null,id INTEGER UNSIGNED not null,date DATE,result VARCHAR(255) not null,time TIME not null,runtime VARCHAR(255) not null,memory VARCHAR(255) not null,lang VARCHAR(255) not null,address VARCHAR(255) not null);";
		mysqli_query($dbConn, $query) or die (mysqli_error($dbConn));
$query1 = "CREATE TABLE $sub(submission_id INTEGER UNSIGNED not null,run_time VARCHAR(255) not null,mem_usage VARCHAR(255) not null,result VARCHAR(255) not null);";
		mysqli_query($dbConn, $query1) or die (mysqli_error($dbConn));
		}

	$date=date("Y-m-d");
	$time=date("h:i:s");
	$sum=$sum+1;
	$filesol=$dir."/SOL".$sum.".txt";
	$permission="chmod -R 777 ".$myArray[0];

	shell_exec($permission);
	$submission=$sum;
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



