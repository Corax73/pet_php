  <style type="text/css">
   #maket {
    width: 90%; /* Ширина всей таблицы */
    height: 40%;
   }
   TD {
    vertical-align: top; /* Вертикальное выравнивание в ячейках */
    padding: 2px; /* Поля вокруг ячеек */
    height: 60%;
   }
   TD#leftcol {
    width: 200px; /* Ширина левой колонки */
    background: #ccc; /* Цвет фона левой колонки */
    border: 1px solid #000; /* Параметры рамки */
   }
   TD#rightcol {
    background: navy; /* Цвет фона правой колонки */
    border: 1px solid #000; /* Параметры рамки */
    color: white;
   }
   #spacer {
    width: 10px; /* Расстояние между колонками */
   }
  </style>
  <div class="parent">
    <div class="block">
<body background="/img/fon.jpg" bgproperties="fixed">
<style>
     .h1 {
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
  .table {
    font-size: 12pt;
  }
  </style> 
<h3 class="h1">Смена раскладки En -> Ру<h3>
  <table cellspacing="0" id="maket" class="table">
   <tr> 
    <td id="leftcol">
	<form action="change_keyboard_layout1.php" method="post">
   <h8>Вставьте нужный отрывок текста<h8>
   <br>
   <h9>Ограничение - до 1500 символов<h9>
   <br>
   <p><textarea name="text"></textarea></p>
   <h6>Меняем символы на другую раскладку<h6>
   <p><input name="change" type="radio" value="1" checked>Смена раскладки En -> Ру</p>
   <p><input type="submit" value="Отправить"></p>
  </form>
	</td>
    <td id="spacer"></td>
    <td id="rightcol">
<?php
require_once 'change_keyboard_layout2.php';
?>
	</td>
   </tr>
  </table>
 </body>
 <p align="center"><a href="/"> Вернуться на главную</a></p>
 </body>
</div>
</div>
<?php
include $_SERVER['DOCUMENT_ROOT'] . '/templates/footer.php';
?>