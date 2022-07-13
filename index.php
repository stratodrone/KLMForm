<?php
if($_POST["message"]) {
	mail(troy@stratodronesolutions,com", "New Form",
	$_POST["TAKE THIS"]. "From: troywsullivan44@gmail.com");
	} 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Text and password inputs</title>
	<style>
		body {
			font: 100% arial, helvetica, sans-serif;
		}

		fieldset {
			padding: 0 1em 1em 1em;
		}

		legend {
			padding: 1em;
		}
	</style>
</head>
<body>
	<form action="someplace.php">
		<fieldset>
			<legend>Text and Password</legend>
			<label for="username">Username:</label>
			<input name="username" id="username" value="Some Text">
			<label for="password">Password:</label>
			<input type="password" name="password" id="password" value="Password">
		</fieldset>
	</form>

	<!-- Link back to HTML Dog: -->
	<p><a href="http://www.htmldog.com/examples/"><img src="http://www.htmldog.com/badge1.gif" alt="HTML Dog"></a></p>
</body>
</html>
