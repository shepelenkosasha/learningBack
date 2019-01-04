<?php 
/*Нарисуйте пирамиду, как показано на рисунке, воспользовавшись циклом for или while.<br><br>
xx<br>
xxxx<br>
xxxxxx<br>
xxxxxxxx<br>
xxxxxxxxxx*/

$a = 'xx';

for ($i = 0; $i <= 5 ; $i ++, $a = $a . 'xx') { 
	# code...
	;
	echo $a . '<br/>';
}
 ?>