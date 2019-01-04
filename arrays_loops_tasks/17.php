<?php 
/*Составьте массив месяцев. С помощью цикла foreach выведите все месяцы, а текущий месяц выведите жирным. Текущий месяц должен храниться в переменной $month.*/
$arr = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
$month = $arr[0];
foreach ($arr as $key => $value) {
	# code...
	if ($value == 'January') {
		# code...
		echo '<b>' . $month . '</b>' . PHP_EOL;
	} else {
		echo $value . PHP_EOL;
	}
	

}

 ?>
