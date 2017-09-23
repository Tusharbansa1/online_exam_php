<?php
	$mysqli = new mysqli('localhost' , 'root' ,'12345' , 'exam');
	if ($mysqli->connect_error) {
	die("Connection failed: " . $mysqli->connect_error);
}
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM department WHERE email='$username' AND password='$password'";
	
	echo "<br>";
	$result_verify = $mysqli->query($sql);
	$count = mysqli_num_rows($result_verify);
	if($count>0){
		
		header('location: question.php');

	}
	else{
		echo 'wrong id';
	}
}
else{
	echo 'not connected to server<br>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>department</title>
</head>
<body>
<br><br><br>
	<form action="department_login.php" method="POST">
		department username <br> <br>
	<input type="email" name="username"><br> <br>
	department password <br><br>
	<input type="password" name="password"> <br> <br>
	<input type="submit" name="submut">

	</form>
</body>
</html>
