<?php 
/*Ваше задание создать массив, наполнить это случайными значениями (функция rand), найти максимальное и минимальное значение и поменять их местами.*/

$arr = [];

for ($i = 0; $i < 10; $i++) { 

	$arr[] = rand(1, 100);

}

$max = max($arr);
$min = min($arr);

print_r($arr);
echo '<br/>';
echo '<br/>';
echo $max . ' max value' . '<br/>';
echo $min . ' min value';


?>