<?php
/*
������� 1
- �������� ������ $bmw � ��������:
	"model"
	"speed"
	"doors"
	"year"
- ��������� ������ ����������: "X5", 120, 5, "2006"	
- �������� ������� $toyota � $opel ����������� ������� $bmw.
- ��������� ������ $toyota ����������: "Carina", 130, 4, "2007"
- ��������� ������ $opel ����������: "Corsa", 140, 5, "2007"		
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<title>�������</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
</head>
<body>
	<h1>�������</h1>
	<?php
	/*
	������� 2
	- �������� �������� ���� ��� �������� � ����: name - model - speed - doors -year,  ��������: bmw - 120 - 5 - 2006
	*/
	
	$bmw = array('model'=>'X5','speed'=>120,'doors'=>5,'year'=>2006);
	$toyota = array('model'=>'Carina','speed'=>130,'doors'=>4,'year'=>2007);
	$opel = array('model'=>'Corsa','speed'=>140,'doors'=>5,'year'=>2007);
	//echo '<pre>';
	echo "BMW - $bmw[model] - $bmw[speed] - $bmw[doors] - $bmw[year]";
	echo '<br>';
	echo "TOYOTA - $toyota[model] - $toyota[speed] - $toyota[doors] - $toyota[year]";
	echo '<br>';
	echo "OPEL - $opel[model] - $opel[speed] - $opel[doors] - $opel[year]";
	//echo '<pre>';
	echo '<hr>';
	
	$cars['bmw']= array(
						'model'=>'X5',
						'speed'=>120,
						'doors'=>5,
						'year'=>2006);
	$cars['TOYOTA']= array(
						'model'=>'Carina','speed'=>130,
						'doors'=>4,
						'year'=>2007);
	$cars['OPEL']= array(
						'model'=>'Corsa','speed'=>140,
						'doors'=>5,
						'year'=>2007);
	echo "$cars";						
	
	
	?>
</body>
</html>
