<?php 
/*Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 20 рядов, а не 5.<br><br>
x<br>
xx<br>
xxx<br>
xxxx<br>
xxxxx*/

$a = 'x';

for ($i = 0; $i <= 20 ; $i ++, $a = $a . 'x') { 
	# code...
	;
	echo $a . '<br/>';
}


 ?>