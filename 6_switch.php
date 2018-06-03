<?php
$a = 4;

switch ($a){
	case 0: 
		echo 'ноль';break;
	case 1: 
		echo 'ќдин';break;
	case 2: 
		echo 'ƒва';break;
	case 3: 
		echo '“ри';break;
	case 4: 
		echo '„етыре';break;	
	default : echo 'ћного';
	
}

echo '<hr>';

?>

<?php

//ini_get('имя дерективы');

// 8M 
// 256K
// 1G
// число без букв байты post max size


$size = ini_get('post_max_size');
$letter =$size{strlen($size)-1};
$size = (integer)$size;

switch ($letter){
	case G: $size *= 1024;
	case M: $size *= 1024;
	case K: $size *= 1024;
	}
	
echo  'Post_max_size ='.$size.' bytes';

?>