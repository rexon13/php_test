<?php
$user['name'] = 'John';
$user['login'] = 'root';
$user['pass'] = '1234';
$user['age'] = 25;
//$user[] = true;

/*for ($i=0,$cnt=count($user);$i<$cnt;$i++){
	echo $user[$i].'<br>';
}*/

/*foreach ($user as $k=>$v){
	
	echo $k.'='.$v.'<br>';
	
}*/

/*echo current($user);
echo next($user);
echo current($user);
echo prev($user);
echo current($user);
echo end($user);
echo reset($user);
echo key($user);*/

$array['a']='John';
$array['b']='';
$array['c']='25';
$array['d']='true';

echo end($array);

while($val = prev($array))
	
echo $val;
?>