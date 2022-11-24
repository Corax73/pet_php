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
        <h1 class="shadowtext">Каталог условных товаров</h1>
		</br>
		<body>  
		<style type="text/css">
   #maket {
    width: 100%; /* Ширина всей таблицы */
   }
   TD {
    vertical-align: top; /* Вертикальное выравнивание в ячейках */
    padding: 5px; /* Поля вокруг ячеек */
   }
   TD#leftcol {
    width: 200px; /* Ширина левой колонки */
    background: #ccc; /* Цвет фона левой колонки */
    border: 1px solid #000; /* Параметры рамки */
   }
   TD#rightcol {
    background: #6b91c9; /* Цвет фона правой колонки */
    border: 1px solid #000; /* Параметры рамки */
   }
   #spacer {
    width: 10px; /* Расстояние между колонками */
   }
  </style>
  <body>
  <table cellspacing="0" id="maket">
   <tr> 
    <td id="leftcol">
<form action="catselect1.php" method="post">
  <p>Выберите товар</p>
  <p><select name="product">
  <option value="1" checked>Квадрат</option>
  <option value="2">Круг</option>
  <option value="3">Прямоугольник</option>
  </select></p>
  <label>
      <p>Выберете цвет товара</p>
	  <p><input type="radio" name="color" value="red" checked>Красный</p>
      <img src="/img/store_layout/squarered1.jpg">
	  <p><input type="radio" name="color" value="orange">Оранжевый</p>
      <img src="/img/store_layout/squareoran1.jpg">
	  <p><input type="radio" name="color" value="yellow">Желтый</p>
      <img src="/img/store_layout/squareyel1.jpg">
	  <p><input type="radio" name="color" value="green">Зеленый</p>
      <img src="/img/store_layout/squaregre1.jpg">
	  <p><input type="radio" name="color" value="blue">Голубой</p>
      <img src="/img/store_layout/squareblu1.jpg">
	  <p><input type="radio" name="color" value="darkblue">Синий</p>
      <img src="/img/store_layout/squaredblu1.jpg">
	  <p><input type="radio" name="color" value="violet">Фиолетовый</p>
      <img src="/img/store_layout/squarevio1.jpg">
	  <p><input type="radio" name="color" value="white">Белый</p>
      <img src="/img/store_layout/squarewhi1.jpg">
	  <p><input type="radio" name="color" value="black">Черный</p>
      <img src="/img/store_layout/squarebla1.jpg">
    </label>  
  <p><input type="submit" value="Выбрать"></p>
</select>
</td>
    <td id="spacer"></td>
	<td id="rightcol">
	<?php require_once 'catselect2.php';?>
	</td>
   </tr>
  </table>
 </body>
 <br>
 <p><a href="/"> Вернуться на главную</a></p>
