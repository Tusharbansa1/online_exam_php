<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>examportal</title>
</head>
<body>
	<?php
	
	 session_start();

	$mysqli = new mysqli('localhost' ,'root' ,'12345' , 'exam');

	if ($mysqli->connect_error) {
		die("Connection failed: " . $mysqli->connect_error);
	}

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$code = $_POST['code'];

		 $_SESSION["code"] = $code;
		header("location: solvepaper.php");
	}
	?>

	<form action="examportal.php" method="post">
		question paper code 
		<br><br>
		<input type="text" name="code"><br>
		<br><input type="submit">
	</form>
</body>
</html>