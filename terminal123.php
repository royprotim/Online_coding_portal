<!doctype html>
<title>CodeMirror: Theme Demo</title>
<meta charset="utf-8"/>
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

<h2>Code Editor</h2>
<?php
$SOURCE="EVNT";
if( strpos( $_GET['Code_id'], $SOURCE ) !== false )
	{ 
 	echo '<form action="event_compile.php?Code_id='.$_GET['Code_id'].'" method="post" enctype="multipart/form-data">';
	}
else
	{
	echo '<form action="compile.php?Code_id='.$_GET['Code_id'].'" method="post" enctype="multipart/form-data">';
	}

?>
<p>Select Language of Interest :
<select name="language" class="button1"  id="language" onChange="document.getElementById('selectedValue').innerHTML = this.value;">
		<option value="C">C</option>
		<option value="Python">Python</option>
		<option value="C++">C++</option>
 		<option value="Java">Java</option>
</select></p>


<p><input type="file"  name="file" size="50" /></p>
<br />
<textarea name="code" rows=18 cols=100 onkeydown=insertTab(this,event) id="code"></textarea><br/>

<input type="submit"   class="button" value="Submit" id="submit">
<input type="reset"  class="button"  value="Reset"><br/>


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













