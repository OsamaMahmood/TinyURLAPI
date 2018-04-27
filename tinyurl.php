<!DOCTYPE html>
<html>
<head>
	<title>Tiny Url</title>
</head>
<body>
	<!- HTML form for taking urls  ->
	<form method="POST">
	<fieldset>
    	<legend>Tiny Url:</legend>
		URL :<input type="text" name="url" id="url">
		<input type="submit" name="submit">
	</fieldset>
	</form>

	<?php
	//Main API used to create TinyURL
		error_reporting(0);
		ini_set('display_errors', 0);
		function createTinyUrl($strURL) {
    		$tinyurl = file_get_contents("http://tinyurl.com/api-create.php?url=" . $strURL);
    		return $tinyurl;
		}
		if ($_POST["url"] == null ) {
			echo "Provide the URL";
		} else{	
			echo(createTinyUrl($_POST["url"]));
		}
		

	?>
</body>
</html>