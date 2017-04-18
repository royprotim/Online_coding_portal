<?php
require 'config.php';
$myArray = explode('/', $_GET['Name']);
$sub=$myArray[0]."_Submission";
preg_match_all('!\d+!', $myArray[1], $matches);
$num = implode(' ', $matches[0]);

$num=intval($num);


?>

<!doctype html>
<title>CodeMirror: Theme Demo</title>
<meta charset="utf-8"/>
<link rel="stylesheet" href="bootstrap.min.css">
        <link rel="stylesheet" href="portal_design.css">
<link rel=stylesheet href="code/doc/docs.css">
<link rel="stylesheet" href="code/lib/codemirror.css">
<link rel="stylesheet" href="code/theme/3024-day.css">
<link rel="stylesheet" href="code/theme/3024-night.css">
<link rel="stylesheet" href="code/theme/abcdef.css">
<link rel="stylesheet" href="code/theme/ambiance.css">
<link rel="stylesheet" href="code/theme/base16-dark.css">
<link rel="stylesheet" href="code/theme/bespin.css">
<link rel="stylesheet" href="code/theme/base16-light.css">
<link rel="stylesheet" href="code/theme/blackboard.css">
<link rel="stylesheet" href="code/theme/cobalt.css">
<link rel="stylesheet" href="code/theme/colorforth.css">
<link rel="stylesheet" href="code/theme/dracula.css">
<link rel="stylesheet" href="code/theme/duotone-dark.css">
<link rel="stylesheet" href="code/theme/duotone-light.css">
<link rel="stylesheet" href="code/theme/eclipse.css">
<link rel="stylesheet" href="code/theme/elegant.css">
<link rel="stylesheet" href="code/theme/erlang-dark.css">
<link rel="stylesheet" href="code/theme/hopscotch.css">
<link rel="stylesheet" href="code/theme/icecoder.css">
<link rel="stylesheet" href="code/theme/isotope.css">
<link rel="stylesheet" href="code/theme/lesser-dark.css">
<link rel="stylesheet" href="code/theme/liquibyte.css">
<link rel="stylesheet" href="code/theme/material.css">
<link rel="stylesheet" href="code/theme/mbo.css">
<link rel="stylesheet" href="code/theme/mdn-like.css">
<link rel="stylesheet" href="code/theme/midnight.css">
<link rel="stylesheet" href="code/theme/monokai.css">
<link rel="stylesheet" href="code/theme/neat.css">
<link rel="stylesheet" href="code/theme/neo.css">
<link rel="stylesheet" href="code/theme/night.css">
<link rel="stylesheet" href="code/theme/panda-syntax.css">
<link rel="stylesheet" href="code/theme/paraiso-dark.css">
<link rel="stylesheet" href="code/theme/paraiso-light.css">
<link rel="stylesheet" href="code/theme/pastel-on-dark.css">
<link rel="stylesheet" href="code/theme/railscasts.css">
<link rel="stylesheet" href="code/theme/rubyblue.css">
<link rel="stylesheet" href="code/theme/seti.css">
<link rel="stylesheet" href="code/theme/solarized.css">
<link rel="stylesheet" href="code/theme/the-matrix.css">
<link rel="stylesheet" href="code/theme/tomorrow-night-bright.css">
<link rel="stylesheet" href="code/theme/tomorrow-night-eighties.css">
<link rel="stylesheet" href="code/theme/ttcn.css">
<link rel="stylesheet" href="code/theme/twilight.css">
<link rel="stylesheet" href="code/theme/vibrant-ink.css">
<link rel="stylesheet" href="code/theme/xq-dark.css">
<link rel="stylesheet" href="code/theme/xq-light.css">
<link rel="stylesheet" href="code/theme/yeti.css">
<link rel="stylesheet" href="code/theme/zenburn.css">
<script src="code/lib/codemirror.js"></script>
<script src="code/mode/javascript/javascript.js"></script>
<script src="code/addon/selection/active-line.js"></script>
<script src="code/addon/edit/matchbrackets.js"></script>
<style type="text/css">
      .CodeMirror {border: 1px solid black; font-size:13px}
    </style>

<ul class="nav nav-tabs" >
  <li class="active"><a href="portal_index.php">Home</a></li>
  <li><a href="mainpage.php">Problems</a></li>
  
  <li><a href="contest.php">Contest</a></li>
 
  <li><a href="submission.php">ViewSubmissions</a></li>
<li><a href="event_ranking.php?Name=EVNT001_Ranking">Ranking</a></li>
<li><a href="logout.php">Logout</a></li>
</ul>

<div class="container-fluid">      
<div class="table-responsive">
<table class="table" border="0" align="center" style="width: 80%">
<h2>Submission Output:</h2>
<col width="20%">
<thead class="thead-inverse" style="color:black"><tr><th>Test_Cases</th><th>Runtime_Time</th><th>Memory_usage</th><th>Result</th></tr>
</thead>
<tbody>
<?php 
$var=0;
$SOURCE="EVNT";

if( strpos( $_GET['Name'], $SOURCE ) !== false )
{
$query3 = "select * from $sub where submission_id=$num";
}
else
{
$query3 = "select * from $practice_submission where submission_id=$num";
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
</div>
</div>
<textarea id="code">
<?php
$myfile = fopen($_GET['Name'], "r") or die("Unable to open file!");
while(!feof($myfile)) 
{
  echo fgets($myfile);
}
fclose($myfile);


?>
</textarea><br/>

<p>Select a theme: <select onchange="selectTheme()" id=select>
    <option selected>default</option>
    <option>3024-day</option>
    <option>3024-night</option>
    <option>abcdef</option>
    <option>ambiance</option>
    <option>base16-dark</option>
    <option>base16-light</option>
    <option>bespin</option>
    <option>blackboard</option>
    <option>cobalt</option>
    <option>colorforth</option>
    <option>dracula</option>
    <option>duotone-dark</option>
    <option>duotone-light</option>
    <option>eclipse</option>
    <option>elegant</option>
    <option>erlang-dark</option>
    <option>hopscotch</option>
    <option>icecoder</option>
    <option>isotope</option>
    <option>lesser-dark</option>
    <option>liquibyte</option>
    <option>material</option>
    <option>mbo</option>
    <option>mdn-like</option>
    <option>midnight</option>
    <option>monokai</option>
    <option>neat</option>
    <option>neo</option>
    <option>night</option>
    <option>panda-syntax</option>
    <option>paraiso-dark</option>
    <option>paraiso-light</option>
    <option>pastel-on-dark</option>
    <option>railscasts</option>
    <option>rubyblue</option>
    <option>seti</option>
    <option>solarized dark</option>
    <option>solarized light</option>
    <option>the-matrix</option>
    <option>tomorrow-night-bright</option>
    <option>tomorrow-night-eighties</option>
    <option>ttcn</option>
    <option>twilight</option>
    <option>vibrant-ink</option>
    <option>xq-dark</option>
    <option>xq-light</option>
    <option>yeti</option>
    <option>zenburn</option>
</select>
</p>

<script>
	
  var editor = CodeMirror.fromTextArea(document.getElementById("code"), {
    lineNumbers: true,
    styleActiveLine: true,
    matchBrackets: true
  });
  var input = document.getElementById("select");
  function selectTheme() {
    var theme = input.options[input.selectedIndex].textContent;
    editor.setOption("theme", theme);
    location.hash = "#" + theme;
  }
  var choice = (location.hash && location.hash.slice(1)) ||
               (document.location.search &&
                decodeURIComponent(document.location.search.slice(1)));
  if (choice) {
    input.value = choice;
    editor.setOption("theme", choice);
  }
  CodeMirror.on(window, "hashchange", function() {
    var theme = location.hash.slice(1);
    if (theme) { input.value = theme; selectTheme(); }
  });
</script>


<script>
window.location.href=”problem_solution.php?Attribute=FUCK";
</script>










