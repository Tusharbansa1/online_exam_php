

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>set question in it</title>
</head>
<body>
	
		<!-- php here to get the no. of question value and use it to make inpput form -->
		
		<?php
		$mysqli = new mysqli('localhost' ,'root' ,'12345' , 'exam');
		if ($mysqli->connect_error) {
			die("Connection failed: " . $mysqli->connect_error);
		}
		// sql command to get question no.
$sql = "SELECT question_no FROM question WHERE id='1235'";
		$result_verify = $mysqli->query($sql);	
		$count = mysqli_num_rows($result_verify);	
		$row = mysqli_fetch_assoc($result_verify);
		$inputform;
		if($count>0){
			$inputform = $row["question_no"];
		} else {
		echo "Error: " . $sql . "<br>" . $mysqli->error;
			}
			echo $inputform;
		


if($_SERVER['REQUEST_METHOD'] == 'POST'){
	// echo $inputform;
	// echo "<br>";
for($i=1;$i<=$inputform;$i++){
	$question = $_POST['Q'.$i];
$try1 = $_POST['option1'.$i];
$try2 = $_POST['option2'.$i];
$try3 = $_POST['option3'.$i];
$try4 = $_POST['option4'.$i];
echo $try1;

echo $try2;

echo $try3;


echo $try4;

echo $question;

}
echo "<br>this is wokr";
}
else{
	echo "not working <br>";
}
			
		?>

<?php
	for($i=1;$i<=$inputform;$i++){


		?>
<form action="setquestion.php" method="post">
	<?php echo 'Q'.$i.''; ?>
	<input type="text" name="Q<?php echo $i;?>">	<br> <br>
	<?php echo 'option1'.$i.''; ?>

	<input type="text" name="option1<?php echo $i; ?>"><br> <br>
	
	<?php echo 'option2'.$i.''; ?>
	<input type="text" name="option2<?php echo $i;?>"> <br> <br>
	<?php echo 'option3'.$i.''; ?>
	<input type="text" name="option3<?php echo $i;?>"> <br> <br>
	<?php echo 'option4'.$i.''; ?>
	<input type="text" name="option4<?php echo $i;?>"> <br> <br>
<?php
	}
	?>
	<input type="submit" name="submit">

	</form>

	
</body>
</html>