

<?php
session_start();
$mysqli = new mysqli('localhost' ,'root' ,'12345' , 'exam');

	if ($mysqli->connect_error) {
		die("Connection failed: " . $mysqli->connect_error);
	}
	$code = $_SESSION["code"];
	$question_no = $_SESSION["question_no"] ;
	//echo $question_no;
	echo "<br>";
		for($i=0;$i<=$question_no;$i++){
	
		
		}
		
		
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>solvepaper</title>
</head>
<body>
	<?php
	for($i=1;$i<=$question_no;$i++){
			$sql = "SELECT * FROM `setquestion` WHERE paper_id = $code and question_id='$code$i'";	
		$result_verify = $mysqli->query($sql);
		$row=mysqli_fetch_row($result_verify);
		$count = mysqli_num_rows($result_verify);
	echo "<br>";
	echo "Question no. ";
	echo $i;	
	echo " ". $row[1];
	echo "<br>";
	echo "<input type='radio' name='$i' value='$row[2]'> $row[2] <br>";
	// echo "option 1  *" . $row[2];
	echo "<br>";
	echo "<input type='radio' name='$i' value='$row[3]'> $row[3] <br>";
	// echo "option 2  *" . $row[3];
	echo "<br>";
	echo "<input type='radio' name='$i' value='$row[4]'> $row[4] <br>";
	// echo "option 3  *" . $row[4];
	echo "<br>";
	echo "<input type='radio' name='$i' value='$row[5]'> $row[5] <br>";
	// echo "option 4  *" . $row[5];
	echo "<br>";
	echo "<input type='submit' value='Submit'> <br>";
	}
	
	?>
	
</body>
</html>