<?php
//�������� �������
function sayHello($name,$h){
	echo "<h$h>Hello, $name!!!</h$h>";
	
}


//������������� �������
sayHello('John',1);
$n = 'Mike';
sayHello($n,2);

$str = 'sayHello';

sayHello('Guest',3);

$str('Guest',3);

//�������� �������
if (function_exists("sayHello")){}
?>