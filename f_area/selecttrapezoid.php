<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Площадь трапеции</title>
	</head>
		</br>
		<body>
		<h1>Площадь трапеции</h1>
		</br>
		<img src="trapezoid.png">
		</body>
<?php
if(isset($_POST['sidea'])){
  
    $sidea = $_POST['sidea'];
}
if(isset($_POST['sideb'])){
  
    $sideb = $_POST['sideb'];
}
if(isset($_POST['height'])){
  
    $height = $_POST['height'];
}
print '</br>';
print 'S = 0.5*h*(a+b)</br>';
$strapezoid = 0.5*$height*($sidea+$sideb);
print 'S = 0.5*' . "$height" . '*' . '(' . "$sidea" . '+' . "$sideb" . ')' . '=' . "$strapezoid";
print '</br>';
print 'Новый расчет';
print '</br>';
print '<form method="post" action="selecttrapezoid.php">
						Введите длины оснований и высоты
						<br>
					<input name="sidea" type="number" min="0" max="9223372036854775807" value="0" step="0.001">
					<br>
					<input name="sideb" type="number" min="0" max="9223372036854775807" value="0" step="0.001">
					<br>
					<input name="height" type="number" min="0" max="9223372036854775807" value="0" step="0.001">
					<br>
					<input type=submit value=:OK">';
?>
	<p><a href="index.php"> Вернуться на главную</a></p>
	<p align="left"><a href="/"> Вернуться на главную</a></p>
	</body>
</html>