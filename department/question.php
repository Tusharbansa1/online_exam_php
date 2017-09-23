<?php
$mysqli = new mysqli('localhost' ,'root' ,'12345' , 'exam');

if ($mysqli->connect_error) {
	die("Connection failed: " . $mysqli->connect_error);
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$branch = $_POST['branch'];
	$sem = $_POST['sem'];
	$id = $_POST['id'];
	$question_no = $_POST['question_no'];
	$sql = "INSERT INTO question (branch, sem, id, question_no) VALUES ('$branch', '$sem', '$id', '$question_no')";
	if ($mysqli->query($sql) === TRUE) {
		echo "New record created successfully";
		header("location: setquestion.php");
	}
	 else {
	echo "Error: " . $sql . "<br>" . $mysqli->error;
			}

}
else{
	echo "not connected server";
}
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