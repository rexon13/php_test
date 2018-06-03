<?php
$user['name'] = 'John';
$user['login'] = 'root';
$user['pass'] = '1234';
$user['age'] = 25;
$user[] = true;


$user1 = array('name'=>'John','login'=>'root','pass'=>'1234','age'=>25,true);

//echo $user[2];
echo '<pre>';
print_r($user);
print_r($user1);
//var_dump($user);
echo '<pre>';
//echo count($user);

$users = array(
	0 => array(
				"user" => 'root',
				"login" => 'root',
				"password" => '123'
	),
	1 => array(
				"user" => 'root',
				"login" => 'root',
				"password" => '123'
	
	)
);

echo '<pre>';
print_r($users);
echo '<pre>';

?>