

<?php
session_start();
$mysqli = new mysqli('localhost' ,'root' ,'12345' , 'exam');

	if ($mysqli->connect_error) {
		die("Connection failed: " . $mysqli->connect_error);
	}
	$code = $_SESSION["code"];

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>solvepaper</title>
</head>
<body>
	
</body>
</html>