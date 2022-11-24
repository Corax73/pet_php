<?php
include $_SERVER['DOCUMENT_ROOT'] .'/source/core.php';
include $_SERVER['DOCUMENT_ROOT'] . '/templates/header.php';
?>
<style>
    .wrap1 {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            overflow: auto;
            
        }
    .block{
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            overflow: auto;
            
        }

  h1 {
            color: blue; 
            padding: 2px;
            text-shadow: 4px 3px 0px grey, 9px 8px 0px rgba(0,0,0,0.15);
           }
           .b1 {
            background: #6b91c9;
            border: 2px solid black;
           }
           .select {
            background: #6b91c9;
            border: 2px solid black;
           }
  </style>
<div id="wrap1">
<div class="block">
<body background="/img/fon.jpg" bgproperties="fixed">
<?php
if(isset($_POST['figureselection1'])){
  
    $figureselection1 = $_POST['figureselection1'];
}
switch ($figureselection1) {
	case '1':
	print '<title>Площадь квадрата</title>
		<body>
		<h1>Площадь квадрата</h1>
		</br>
		<img src="/img/figure/square.png">
		</body>
		<form method="post" action="selectsquare1.php">
						Введите длину стороны
					<input name="sidea" type="number" min="0" max="9223372036854775807" value="0" step="0.001" class="select">
					<br>
					<input type=submit value="OK"class="b1">
					<p align="left"><a href="/"> Вернуться на главную</a></p>';
	break;
	case '2':
	print '<title>Площадь круга</title>
		<body>
		<h1>Площадь круга</h1>
		</br>
		<img src="/img/figure/circle.png">
		</body>
		<form method="post" action="selectcircle1.php">
						Число Пи принимаем равным 3.1415</br>
						Введите длину радиуса 
						<input name="radius" type="number" min="0" max="9223372036854775807" value="0" step="0.001"class="select">
					<br>
					<input type=submit value="OK"class="b1">
					<p align="left"><a href="/"> Вернуться на главную</a></p>';	
	break;		
	case '3':
	print '<title>Площадь прямоугольника</title>
		<body>
		<h1>Площадь прямоугольника</h1>
		</br>
		<img src="/img/figure/rectangle.png">
		</body>
		<form method="post" action="selectrectangle1.php">
						Введите длины сторон
						<br>
					<input name="sidea" type="number" min="0" max="9223372036854775807" value="0" step="0.001"class="select">
					<br>
					<input name="sideb" type="number" min="0" max="9223372036854775807" value="0" step="0.001"class="select">
					<br>
					<input type=submit value="OK"class="b1">
					<p align="left"><a href="/"> Вернуться на главную</a></p>';
	break;	
	case '4':
	print '<title>Площадь треугольника</title>
		<body>
		<h1>Площадь треугольника</h1>
		</br>
		<img src="/img/figure/triangle.png">
		</body>
		<form method="post" action="selecttriangle1.php">
						Введите длины основания и высоты
						<br>
					<input name="sidea" type="number" min="0" max="9223372036854775807" value="0" step="0.001"class="select">
					<br>
					<input name="height" type="number" min="0" max="9223372036854775807" value="0" step="0.001"class="select">
					<br>
					<input type=submit value="OK"class="b1">
					<p align="left"><a href="/"> Вернуться на главную</a></p>';
	break;	
	case '5':
	print '<title>Площадь трапеции</title>
		<body>
		<h1>Площадь трапеции</h1>
		</br>
		<img src="/img/figure/trapezoid.png">
		</body>
		<form method="post" action="selecttrapezoid1.php">
						Введите длины оснований и высоты
						<br>
					<input name="sidea" type="number" min="0" max="9223372036854775807" value="0" step="0.001"class="select">
					<br>
					<input name="sideb" type="number" min="0" max="9223372036854775807" value="0" step="0.001"class="select">
					<br>
					<input name="height" type="number" min="0" max="9223372036854775807" value="0" step="0.001"class="select">
					<br>
					<input type=submit value="OK"class="b1">
					<p align="left"><a href="/"> Вернуться на главную</a></p>';
	break;	
	case '6':
	print '<title>Площадь ромба</title>
		<body>
		<h1>Площадь ромба</h1>
		</br>
		<img src="/img/figure/rhombus.png">
		</body>
		<form method="post" action="selectrhombus1.php">
						Введите длины основания и высоты
						<br>
					<input name="sidea" type="number" min="0" max="9223372036854775807" value="0" step="0.001"class="select">
					<br>
					<input name="height" type="number" min="0" max="9223372036854775807" value="0" step="0.001"class="select">
					<br>
					<input type=submit value="OK"class="b1">
					<p align="left"><a href="/"> Вернуться на главную</a></p>';
	break;	
	case '7':
	print '<title>Площадь параллелограмма</title>
		<body>
		<h1>Площадь параллелограмма</h1>
		</br>
		<img src="/img/figure/parallelogramm.png">
		</body>
		<form method="post" action="selectarallelogramm1.php">
						Введите длины основания и высоты
						<br>
					<input name="sidea" type="number" min="0" max="9223372036854775807" value="0" step="0.001"class="select">
					<br>
					<input name="height" type="number" min="0" max="9223372036854775807" value="0" step="0.001"class="select">
					<br>
					<input type=submit value="OK"class="b1">
					<p align="left"><a href="/"> Вернуться на главную</a></p>';
	break;	
		}  
?>
</body>
<p><a href="/f_area/">Вернуться к выбору фигуры</a></p>
</div>
</div>
<p align="left"><a href="/"> Вернуться на главную</a></p>
<?php
include $_SERVER['DOCUMENT_ROOT'] . '/templates/footer.php';
?>
