<?php 
/*Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach создайте строку
'­1­2­3­4­5­6­7­8­9­'*/

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$result = '';

foreach ($arr as $key => $value) {
	# code...
	$result .= $value;
}



var_dump($result);
 ?>