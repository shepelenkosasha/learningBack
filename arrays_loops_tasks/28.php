<?php 
//Вывести таблицу умножения с помощью двух циклов for

for ($i = 1; $i <= 10; $i++) { 
	# code...
	for ($j = 1; $j <= 10; $j++) { 
		# code...
		echo "$i * $j = " . $i * $j . '<br/>' . PHP_EOL;
	}
	echo '<hr>';
}


?>