<?php 
/*Вам нужно разработать программу, которая считала бы сумму цифр числа введенного пользователем. Например: есть число 123, то программа должна вычислить сумму цифр 1, 2, 3, т. е. 6.</p>
По желанию можете сделать проверку на корректность введения данных пользователем.*/


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP hw 23</title>
</head>
<body>
	
	<form method="POST">
		<input type="text" name="num">
		<button style="
				background-color: #34f3d4;
				border-radius: 4px; 
				font-weight: bold;">
			SUM
		</button>
	</form>

	<?php 

		$num = $_POST['num'];
		$sum = str_split($num);
		$sum = array_sum($sum);

		echo $sum;

	?>

</body>
</html>

