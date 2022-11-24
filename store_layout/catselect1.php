<?php
if (empty($_POST['product'])) {
	header ("Location:http://k98768fx.beget.tech/store_layout/");
	exit();
}   else {
    $product = $_POST['product'];
	$color = $_POST['color'];
}
//вывод текстовки
switch ($product) {
	case '1':
	$vivodsquare = '<title>Условный товар "Квадрат"</title>
		<body>
		<h1>Квадрат</h1>
		</br>
		<p>Цена экземпляра от 10 уе</p>';
	$square = fopen($_SERVER['DOCUMENT_ROOT'] . '/source/servicetxt/square.txt',"w+");
    fwrite($square, $vivodsquare);
    fclose($square);
	break;
	case '2':
	$vivodsquare = '<title>Условный товар "Круг"</title>
		<body>
		<h1>Круг</h1>
		</br>
		<p>Цена экземпляра от 10 уе</p>';
	$square = fopen($_SERVER['DOCUMENT_ROOT'] . '/source/servicetxt/square.txt',"w+");
    fwrite($square, $vivodsquare);
    fclose($square);	
	break;		
	case '3':
	$vivodsquare = '<title>Условный товар "Прямоугольник"</title>
		<body>
		<h1>Прямоугольник</h1>
		</br>
		<p>Цена экземпляра от 10 уе</p>';
	$square = fopen($_SERVER['DOCUMENT_ROOT'] . '/source/servicetxt/square.txt',"w+");
    fwrite($square, $vivodsquare);
    fclose($square);
	break;	
}
//вывод квадрата нужного цвета
if ($product == 1 && $color == 'red') {
	$vivodsquare = '<img src="/img/store_layout/squarered.jpg"></body><p><a href="squareselect3.php"> Выбрать из наличия</a></p>';
	$square = fopen($_SERVER['DOCUMENT_ROOT'] . '/source/servicetxt/square.txt',"a+");
    fwrite($square, $vivodsquare);
    fclose($square);
} elseif ($product == 1 && $color == 'orange'){
	$vivodsquare = '<img src="/img/store_layout/squareoran.jpg"></body><p><a href="squareselect3.php"> Выбрать из наличия</a></p>';
	$square = fopen($_SERVER['DOCUMENT_ROOT'] . '/source/servicetxt/square.txt',"a+");
    fwrite($square, $vivodsquare);
    fclose($square);
} elseif ($product == 1 && $color == 'yellow'){
	$vivodsquare = '<img src="/img/store_layout/squareyel.jpg"></body><p><a href="squareselect3.php"> Выбрать из наличия</a></p>';
	$square = fopen($_SERVER['DOCUMENT_ROOT'] . '/source/servicetxt/square.txt',"a+");
    fwrite($square, $vivodsquare);
    fclose($square);
} elseif ($product == 1 && $color == 'green'){
	$vivodsquare = '<img src="/img/store_layout/squaregre.jpg"></body><p><a href="squareselect3.php"> Выбрать из наличия</a></p>';
	$square = fopen($_SERVER['DOCUMENT_ROOT'] . '/source/servicetxt/square.txt',"a+");
    fwrite($square, $vivodsquare);
    fclose($square);
} elseif ($product == 1 && $color == 'blue'){
	$vivodsquare = '<img src="/img/store_layout/squareblu.jpg"></body><p><a href="squareselect3.php"> Выбрать из наличия</a></p>';
	$square = fopen($_SERVER['DOCUMENT_ROOT'] . '/source/servicetxt/square.txt',"a+");
    fwrite($square, $vivodsquare);
    fclose($square);
} elseif ($product == 1 && $color == 'darkblue'){
	$vivodsquare = '<img src="/img/store_layout/squaredblu.jpg"></body><p><a href="squareselect3.php"> Выбрать из наличия</a></p>';
	$square = fopen($_SERVER['DOCUMENT_ROOT'] . '/source/servicetxt/square.txt',"a+");
    fwrite($square, $vivodsquare);
    fclose($square);
} elseif ($product == 1 && $color == 'violet'){
	$vivodsquare = '<img src="/img/store_layout/squarevio.jpg"></body><p><a href="squareselect3.php"> Выбрать из наличия</a></p>';
	$square = fopen($_SERVER['DOCUMENT_ROOT'] . '/source/servicetxt/square.txt',"a+");
    fwrite($square, $vivodsquare);
    fclose($square);
} elseif ($product == 1 && $color == 'white'){
	$vivodsquare = '<img src="/img/store_layout/squarewhi.jpg"></body><p><a href="squareselect3.php"> Выбрать из наличия</a></p>';
	$square = fopen($_SERVER['DOCUMENT_ROOT'] . '/source/servicetxt/square.txt',"a+");
    fwrite($square, $vivodsquare);
    fclose($square);
} elseif ($product == 1 && $color == 'black'){
	$vivodsquare = '<img src="/img/store_layout/squarebla.jpg"></body><p><a href="squareselect3.php"> Выбрать из наличия</a></p>';
	$square = fopen($_SERVER['DOCUMENT_ROOT'] . '/source/servicetxt/square.txt',"a+");
    fwrite($square, $vivodsquare);
    fclose($square);
} else {
	
}
//вывод круга нужного цвета
if ($product == 2 && $color == 'red') {
	$vivodsquare = '<img src="/img/store_layout/circlered.jpg"></body><p><a href="circleselect3.php"> Выбрать из наличия</a></p>';
	$square = fopen($_SERVER['DOCUMENT_ROOT'] . '/source/servicetxt/square.txt',"a+");
    fwrite($square, $vivodsquare);
    fclose($square);
} elseif ($product == 2 && $color == 'orange'){
	$vivodsquare = '<img src="/img/store_layout/circleoran.jpg"></body><p><a href="circleselect3.php"> Выбрать из наличия</a></p>';
	$square = fopen($_SERVER['DOCUMENT_ROOT'] . '/source/servicetxt/square.txt',"a+");
    fwrite($square, $vivodsquare);
    fclose($square);
} elseif ($product == 2 && $color == 'yellow'){
	$vivodsquare = '<img src="/img/store_layout/circleyel.jpg"></body><p><a href="circleselect3.php"> Выбрать из наличия</a></p>';
	$square = fopen($_SERVER['DOCUMENT_ROOT'] . '/source/servicetxt/square.txt',"a+");
    fwrite($square, $vivodsquare);
    fclose($square);
} elseif ($product == 2 && $color == 'green'){
	$vivodsquare = '<img src="/img/store_layout/circlegre.jpg"></body><p><a href="circleselect3.php"> Выбрать из наличия</a></p>';
	$square = fopen($_SERVER['DOCUMENT_ROOT'] . '/source/servicetxt/square.txt',"a+");
    fwrite($square, $vivodsquare);
    fclose($square);
} elseif ($product == 2 && $color == 'blue'){
	$vivodsquare = '<img src="/img/store_layout/circleblu.jpg"></body><p><a href="circleselect3.php"> Выбрать из наличия</a></p>';
	$square = fopen($_SERVER['DOCUMENT_ROOT'] . '/source/servicetxt/square.txt',"a+");
    fwrite($square, $vivodsquare);
    fclose($square);
} elseif ($product == 2 && $color == 'darkblue'){
	$vivodsquare = '<img src="/img/store_layout/circledblu.jpg"></body><p><a href="circleselect3.php"> Выбрать из наличия</a></p>';
	$square = fopen($_SERVER['DOCUMENT_ROOT'] . '/source/servicetxt/square.txt',"a+");
    fwrite($square, $vivodsquare);
    fclose($square);
} elseif ($product == 2 && $color == 'violet'){
	$vivodsquare = '<img src="/img/store_layout/circlevio.jpg"></body><p><a href="circleselect3.php"> Выбрать из наличия</a></p>';
	$square = fopen($_SERVER['DOCUMENT_ROOT'] . '/source/servicetxt/square.txt',"a+");
    fwrite($square, $vivodsquare);
    fclose($square);
} elseif ($product == 2 && $color == 'white'){
	$vivodsquare = '<img src="/img/store_layout/circlewhi.jpg"></body><p><a href="circleselect3.php"> Выбрать из наличия</a></p>';
	$square = fopen($_SERVER['DOCUMENT_ROOT'] . '/source/servicetxt/square.txt',"a+");
    fwrite($square, $vivodsquare);
    fclose($square);
} elseif ($product == 2 && $color == 'black'){
	$vivodsquare = '<img src="/img/store_layout/circlebla.jpg"></body><p><a href="circleselect3.php"> Выбрать из наличия</a></p>';
	$square = fopen($_SERVER['DOCUMENT_ROOT'] . '/source/servicetxt/square.txt',"a+");
    fwrite($square, $vivodsquare);
    fclose($square);
} else {
	
}
//вывод прямоугольника нужного цвета
if ($product == 3 && $color == 'red') {
	$vivodsquare = '<img src="/img/store_layout/rectanglered.jpg"></body><p><a href="rectangleselect3.php"> Выбрать из наличия</a></p>';
	$square = fopen($_SERVER['DOCUMENT_ROOT'] . '/source/servicetxt/square.txt',"a+");
    fwrite($square, $vivodsquare);
    fclose($square);
} elseif ($product == 3 && $color == 'orange'){
	$vivodsquare = '<img src="/img/store_layout/rectangleoran.jpg"></body><p><a href="rectangleselect3.php"> Выбрать из наличия</a></p>';
	$square = fopen($_SERVER['DOCUMENT_ROOT'] . '/source/servicetxt/square.txt',"a+");
    fwrite($square, $vivodsquare);
    fclose($square);
} elseif ($product == 3 && $color == 'yellow'){
	$vivodsquare = '<img src="/img/store_layout/rectangleyel.jpg"></body><p><a href="rectangleselect3.php"> Выбрать из наличия</a></p>';
	$square = fopen($_SERVER['DOCUMENT_ROOT'] . '/source/servicetxt/square.txt',"a+");
    fwrite($square, $vivodsquare);
    fclose($square);
} elseif ($product == 3 && $color == 'green'){
	$vivodsquare = '<img src="/img/store_layout/rectanglegre.jpg"></body><p><a href="rectangleselect3.php"> Выбрать из наличия</a></p>';
	$square = fopen($_SERVER['DOCUMENT_ROOT'] . '/source/servicetxt/square.txt',"a+");
    fwrite($square, $vivodsquare);
    fclose($square);
} elseif ($product == 3 && $color == 'blue'){
	$vivodsquare = '<img src="/img/store_layout/rectangleblu.jpg"></body><p><a href="rectangleselect3.php"> Выбрать из наличия</a></p>';
	$square = fopen($_SERVER['DOCUMENT_ROOT'] . '/source/servicetxt/square.txt',"a+");
    fwrite($square, $vivodsquare);
    fclose($square);
} elseif ($product == 3 && $color == 'darkblue'){
	$vivodsquare = '<img src="/img/store_layout/rectangledblu.jpg"></body><p><a href="rectangleselect3.php"> Выбрать из наличия</a></p>';
	$square = fopen($_SERVER['DOCUMENT_ROOT'] . '/source/servicetxt/square.txt',"a+");
    fwrite($square, $vivodsquare);
    fclose($square);
} elseif ($product == 3 && $color == 'violet'){
	$vivodsquare = '<img src="/img/store_layout/rectanglevio.jpg"></body><p><a href="rectangleselect3.php"> Выбрать из наличия</a></p>';
	$square = fopen($_SERVER['DOCUMENT_ROOT'] . '/source/servicetxt/square.txt',"a+");
    fwrite($square, $vivodsquare);
    fclose($square);
} elseif ($product == 3 && $color == 'white'){
	$vivodsquare = '<img src="/img/store_layout/rectanglewhi.jpg"></body><p><a href="rectangleselect3.php"> Выбрать из наличия</a></p>';
	$square = fopen($_SERVER['DOCUMENT_ROOT'] . '/source/servicetxt/square.txt',"a+");
    fwrite($square, $vivodsquare);
    fclose($square);
} elseif ($product == 3 && $color == 'black'){
	$vivodsquare = '<img src="/img/store_layout/rectanglebla.jpg"></body><p><a href="rectangleselect3.php"> Выбрать из наличия</a></p>';
	$square = fopen($_SERVER['DOCUMENT_ROOT'] . '/source/servicetxt/square.txt',"a+");
    fwrite($square, $vivodsquare);
    fclose($square);
} else {
	
}

exit("<meta http-equiv='refresh' content='0; url= http://k98768fx.beget.tech/store_layout/'>");
?>