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
    .block1{
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
         <h1>Площадь прямоугольника</h1>
		</br>
		<img src="/img/figure/rectangle.png">
		</body>
<?php
if(isset($_POST['sidea'])){
  
    $sidea = $_POST['sidea'];
}
if(isset($_POST['sideb'])){
  
    $sideb = $_POST['sideb'];
}
print '</br>';
print 'S = a*b</br>';
$srectangle = $sidea*$sideb;
print 'S = ' . "$sidea" . '*' . "$sideb" . '=' . "$srectangle";
print '</br>';
print 'Новый расчет';
print '</br>';
print '<form method="post" action="selectrectangle1.php">
						Введите длины сторон
						<br>
					<input name="sidea" type="number" min="0" max="9223372036854775807" value="0" step="0.001"class="select">
					<br>
					<input name="sideb" type="number" min="0" max="9223372036854775807" value="0" step="0.001"class="select">
					<br>
					<input type=submit value="OK"class="b1">'
?>
	<p><a href="/f_area/">Вернуться к выбору фигуры</a></p>
	<p align="left"><a href="/"> Вернуться на главную</a></p>
    </body>
    </div>
</div>