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
 	
	<form method="GET">
		<input type="text" name="num">
		<button>SUM</button>
	</form>

 </body>
 </html>

 <?php 
$num = $_GET['num'];
$sum = str_split($num);
$sum = array_sum($sum);

echo $sum;

  ?>