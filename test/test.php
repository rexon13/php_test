<?php
//Описание функции
function sayHello($name,$h){
	echo "<h$h>Hello, $name!!!</h$h>";
	
}


//Использование функции
sayHello('John',1);
$n = 'Mike';
sayHello($n,2);

$str = 'sayHello';

sayHello('Guest',3);

$str('Guest',3);

//Проверка функции
if (function_exists("sayHello")){}
?>