<?php
include $_SERVER['DOCUMENT_ROOT'] .'/source/core.php';
include $_SERVER['DOCUMENT_ROOT'] . '/templates/header.php';
?>

<div id="wrap">
<body background="/img/fon.jpg" bgproperties="fixed">
<div>
<style>
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
  <div class="parent">
    <div class="block">
    <style>
   .shadowtext {
    text-shadow: 1px 1px 2px black, 0 0 1em blue; /* Параметры тени */
    color: darkblue; /* Белый цвет текста */
    font-size: 2em; /* Размер надписи */
   }
   </style>
	<h1 class="shadowtext">Выбор из наличия</h1>
  <body> 
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/source/db/boot.php';
            echo '<ul>';
            $query = pdo()->query("SELECT `price` FROM `product`WHERE `name`='square'");
            $tmp = $query->fetchAll(PDO::FETCH_ASSOC);
            foreach ($tmp as $tmp) {
	                 foreach ($tmp as $task_detail) {
			//print_r ($task_detail);
		    $prise[] = $task_detail;
	                 }
            };
			 echo '<form action="basketsquare.php" method="post">
			<p>Добавить в корзину</p>
			<p><select name="basket[]" multiple required="required">
			<optgroup label="Выберите хотя бы одно значение">
			<option value="'.$prise[0] . '">' . 'Стоимость '. $prise[0] . ' уе'. '</option>
			<option value="' .$prise[1] . '">' . 'Стоимость '. $prise[1] . ' уе'. '</option>
            </select></p>'
			.'<br>';
            echo '</ul>';
?>
			<p><input type="submit" value="Выбрать"></p>
<p><a href="/store_layout/"> Вернуться в каталог</a></p>
<br>
<p><a href="/"> Вернуться на главную</a></p>
</div>
</div>
<?php
include $_SERVER['DOCUMENT_ROOT'] . '/templates/footer.php';
?>