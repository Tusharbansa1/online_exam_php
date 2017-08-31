<?php
$mysqli = new mysqli('localhost','root','12345','exam');
if ($mysqli->connect_error) {
	die("Connection failed: " . $mysqli->connect_error);
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$verify = "SELECT email, password From signup WHERE email='$username' AND password='$password'";
	
	echo "<br>";
	$result_verify = $mysqli->query($verify);
	$count = mysqli_num_rows($result_verify);
	if($count>0){
		echo 'logged in';
		header("location: examportal.php");
	}
	else{
		echo "there is some error";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body>
	<h1>student login page</h1>
	<form action="student_login.php" method="post">
		username <br> <br>
		<input type="text" name="username"> <br> <br>

		password <br> <br>
		<input type="password" name="password"> <br> <br>
		<input type="submit" name="submit"> 
	</form>
</body>
</html>