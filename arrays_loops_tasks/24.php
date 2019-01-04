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
	
	<form method="GET">
		<input type="text" name="n">
		<input type="text" name="num">
		<br>
		<button>Click</button>
	</form>

</body>
</html>


<?php 
$n = $_GET['n'];
$num = $_GET['num'];
$count = substr_count($num, $n);


print_r($count);
?>