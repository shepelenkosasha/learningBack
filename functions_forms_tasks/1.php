<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
	<form method="POST">
		
		<textarea name="item1" cols="30" rows="10"></textarea>	
		<textarea name="item2" cols="30" rows="10"></textarea>
		<button>Click!</button>
		
	</form>

</body>
</html>


<?php 

/*Создать форму с двумя элементами textarea. При отправке формы скрипт должен выдавать только те слова, которые есть и в первом и во втором поле ввода.
Реализацию это логики необходимо поместить в функцию getCommonWords($a, $b), которая будет возвращать массив с общими словами.*/

$a = $_POST['item1'];
$b = $_POST['item2'];
$result = getCommonWords($a, $b);

function getCommonWords(string $a, string $b) : array
{
	$items1 = splitString($a);
	$items2 = splitString($b);
	$result = [];

	foreach ($items1 as $item1) {
		foreach ($items2 as $item2) {
			if ($item1 === $item2) {
				$result[] = $item1;
			}
		}
	}

	return $result;
}

function splitString(string $a) : array 
{
	return explode(' ', $a);
}

print_r($result);

?>