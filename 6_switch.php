<?php
$a = 4;

switch ($a){
	case 0: 
		echo '����';break;
	case 1: 
		echo '����';break;
	case 2: 
		echo '���';break;
	case 3: 
		echo '���';break;
	case 4: 
		echo '������';break;	
	default : echo '�����';
	
}

echo '<hr>';

?>

<?php

//ini_get('��� ���������');

// 8M 
// 256K
// 1G
// ����� ��� ���� ����� post max size


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