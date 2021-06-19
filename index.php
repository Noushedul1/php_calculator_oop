<?php 
include 'header.php'; 
include 'calculation.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<div id="calForm">
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<div>
			Enter Your First Number : 
			<input type="number" name="firstnum">
		</div>
		<div>
			Enter Your Second Number : 
			<input type="number" name="secondnum">
		</div>
		<div>
			<input type="submit" name="submit" value="Calculation">
		</div>
	</form>
	</div>
	<?php
	if(isset($_POST['submit'])){
		$firstnumber = $_POST['firstnum'];
		$secondnumber = $_POST['secondnum'];

		if(empty($firstnumber) or empty($secondnumber)){
			echo "<span style='color:red;'>Empty</span>";
		}else{
			echo "First Number is : " . $firstnumber . "Second Number : " .$secondnumber."<br>";
			$cal = new calculation;
			$cal->add($firstnumber,$secondnumber);
			$cal->sub($firstnumber,$secondnumber);
			$cal->mul($firstnumber,$secondnumber);
			$cal->div($firstnumber,$secondnumber);
		}
	}
	?>
</body>
</html>
<?php include 'footer.php'; ?>