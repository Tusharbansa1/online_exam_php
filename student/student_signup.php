<?php
$mysqli = new mysqli('localhost' ,'root' , '12345', 'exam');
/*database connection condition*/
if ($mysqli->connect_error) {
	die("Connection failed: " . $mysqli->connect_error);
}

echo "<br>";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$name =  $_POST['name'];
	$semester = $_POST['semester'];
	$branch = $_POST['branch'];
	$email = $_POST['email'];
	$password =  md5($_POST['password']);
$verify = "SELECT email FROM signup WHERE email='$email'";
$result_verify = $mysqli->query($verify);


$count = mysqli_num_rows($result_verify);
if($count>0){
	echo 'already exist email id';
}
else{
	$sql = "INSERT INTO signup (name ,semester, branch , email , password)
	VALUES ('$name','$semester','$branch', '$email', '$password')";

	if ($mysqli->query($sql) === TRUE) {
		echo "New record created successfully";
		header("location: student_login.php");
	}
	 else {
	echo "Error: " . $sql . "<br>" . $mysqli->error;
			}
	}
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>signup student</title>
</head>
<body>

	<form action="student_signup.php" method="post">
		name  <br> <br>
		<input type="text" name="name"> <br> <br>
		semester <br> <br>
		<input type="text" name="semester"> <br> <br>
		branch <br> <br>
		<input type="text" name="branch"> <br> <br>
		email <br> <br>
		<input type="email" name="email"> <br> <br>
		password <br> <br>
		<input type="password" name="password"> <br> <br>
		<input type="submit" name="submit">

	</form>
</body>
</html>