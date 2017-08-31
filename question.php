<?php
$mysqli = new mysqli('localhost' ,'root' ,'' , '')

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>question set</title>
</head>
<body>
	<form action="question.php" method="POST">
		branch <br> <br>
		<input type="text" name="branch"><br> <br>
		sem <br> <br>
		<input type="text" name="sem"> <br> <br>
		id <br> <br>
		<input type="text" name="id"> <br> <br>
		no. of question <br> <br>
		<input type="number" name="question_no"><br> <br>
		<input type="submit" name="submit">
	</form>
</body>
</html>