<?php
/*
������� 1
- �������� ���������� $day � ��������� �� ������������ �������� ��������
*/

$day = 1;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<title>����������� switch</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
</head>
<body>
	<h1>����������� switch</h1>
	<?php
	/*
	������� 2
	-  � ������� ����������� switch �������� ����� "��� ������� ����", ���� �������� ���������� $day �������� � �������� ����� �� 1 �� 5(������������) 
	- �������� ����� "��� �������� ����", ���� �������� ���������� $day ����� ������ 6 ��� 7
	- �������� ����� "����������� ����", ���� �������� ���������� $day �� �������� � �������� ����� �� 1 �� 7(������������) 
	*/
	
switch ($day):
	case 1 : 
		echo "��� ������� ����";break;
	case 2 : 
		echo "��� ������� ����";break;
	case 3 : 
		echo "��� ������� ����";break;
	case 4 : 
		echo "��� ������� ����";break;
	case 5 : 
		echo "��� ������� ����";break;
	case 6 : 
		echo "��� �������� ����";break;
	case 7 : 
	default : echo '����������� ����';
endswitch;
	?>
</body>
</html>
