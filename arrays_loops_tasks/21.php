<?php 
/*Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 9 рядов, а не 5.<br><br>
1<br>
22<br>
333<br>
4444<br>
55555*/

for ($i= 0; $i <= 9; $i++) { 
	# code...
	for ($j = 0; $j <= $i; $j++) { 
		# code...
		echo $i;
		
	}
	echo '<br/>';
}

 ?>