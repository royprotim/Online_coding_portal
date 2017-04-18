<?php
	$file_sol=fopen($filesol,"w+");
	fwrite($file_sol,file_get_contents($filename_code));
	fclose($file_sol);
	$CC="javac";

	$mem_file_output=" > output.txt";
	$file_output=" > output.txt; } 2> time.txt";
	$out="{ /usr/bin/time -f %e java < ";
	$mem_out="valgrind --log-file='filename.txt' java < ";

	$filename_error="error.txt";
	$runtime_file="runtime.txt";

	$executable="*.class";
 	//for compiling java Code

	$command=$CC." ".$filename_code;
	
	$command_error=$command." 2>".$filename_error;
	$runtime_error_command=$out." 2>".$runtime_file;
	exec("chmod 777 $executable"); 
	exec("chmod 777 $filename_error");	
	shell_exec($command_error);
	$error=file_get_contents($filename_error);
	if(trim($error)=="")
		{
		$out=$out.$filename_input.$file_output;
		shell_exec($out);
		$runtime=file_get_contents("time.txt");
		$mem_out=$mem_out.$filename_input.$mem_file_output;
		shell_exec($mem_out);
		$memory=shell_exec("grep -Po 'frees, \K.*(?= allocated)' filename.txt");
		
		echo $runtime;
		echo $memory;
		$runtime_error=file_get_contents($runtime_file);
		echo "<pre>$runtime_error</pre>";
	
		}
	else if(!strpos($error,"error"))
		{
			echo "<pre>$error</pre>";
			$out=$out.$filename_input.$file_output;
			shell_exec($out);
			$runtime=file_get_contents("time.txt");
			$mem_out=$mem_out.$filename_input.$mem_file_output;
			shell_exec($mem_out);
			$memory=shell_exec("grep -Po 'frees, \K.*(?= allocated)' filename.txt");
		
		
		}
	else
			echo "<pre>$error</pre>";
	
        echo "<br />";
	$runtime=trim($runtime);

	
	$gcc="diff";
	$out=$gcc." -q  ".$filename_output." ".$file_output;
	$output=shell_exec($out);
	if(trim($output)=="")
		{
	$result="Correct";
	include 'correct_print.php';
		}
	else{
	$result="Incorrect";
	include "incorrect_print.php";	
	}
	
	echo "<br />";
 $query="INSERT INTO $Dir(`id`,`date`,`result`,`time`,`runtime`,`memory`,`lang`,`address`) VALUES 	          	('$sum','$date','$result','$time','$runtime','$memory','$languageID','$filesol')";
        $result = mysqli_query($dbConn, $query) or die(mysqli_error($dbConn));


	exec("rm *.java");
	exec("rm *.txt");
	exec("rm $executable");

?>
