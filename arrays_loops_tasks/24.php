<?php 
/*Вам нужно разработать программу, которая считала бы количество вхождений
какой­нибуть выбранной вами цифры в выбранном вами числе. Например: цифра 5 в числе 442158755745 встречается 4 раза.*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP 24 hw</title>
</head>
<body>
	
	<form method="POST">
		<input type="text" name="n" value="5">
		<input type="text" name="num" value="442158755745">
		<button style="
				background-color: #343ff4;
				cursor: pointer;
				color: #fff993;
				padding: 5px 20px;
				border-radius: 5px;
				border: none;
				font-size: 24px; 
				font-weight: bold;">
			Click
		</button>
		<br>
		<hr>
	</form>

	<?php 

		$n = $_POST['n'];
		$num = $_POST['num'];
		$count = substr_count($num, $n);
		$count = '<h1>' . $count . '</h1>';

		print_r($count);
		
	?>

</body>
</html>
