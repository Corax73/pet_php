<?php
include $_SERVER['DOCUMENT_ROOT'] .'/source/core.php';
include $_SERVER['DOCUMENT_ROOT'] . '/templates/header.php';
?>
<style type="text/css">
   #maket {
    width: 98%; /* Ширина всей таблицы */
   }
   TD {
    vertical-align: top; /* Вертикальное выравнивание в ячейках */
    padding: 3px; /* Поля вокруг ячеек */
   }
   TD#leftcol {
    width: 150px; /* Ширина левой колонки */
    background: #ccc; /* Цвет фона левой колонки */
    border: 1px solid #000; /* Параметры рамки */
   }
      TD#rightcol {
    background: #112b8a; /* Цвет фона правой колонки */
    border: 1px solid #000; /* Параметры рамки */
	color: white;
    font-size: 1.1rem;
   }
   #spacer {
    width: 5px; /* Расстояние между колонками */
   }
  </style>
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
  </style>
<div id="wrap">
<div id="wrap1">
    <div class="block">
<body background="/img/fon.jpg" bgproperties="fixed">
<div><h1 class="h1">Отзывы<h1>
<table cellspacing="0" id="maket">
   <tr> 
    <td id="leftcol">
	<form action="comm.php" method="post">
   <h6>Ваше имя<h6>
   <p><input name="name"  placeholder="Имя"/></p>
  
   <h6>Ваш e-mail для связи<h6>
   <p><input name="email" placeholder="Почта"/></p>
  
   <h6>Ваше сообщение<h6>
   <p><textarea name="msg"></textarea></p>
   <p><input type="submit" value="Отправить"></p>
  </form>
	</td>
    <td id="spacer"></td>
    <td id="rightcol">
<?php
require_once 'new1.php';
?>
	</td>
   </tr>
  </table>
 </body>
</body>
</div>
</div>
</div>
</div>
<?php
include $_SERVER['DOCUMENT_ROOT'] . '/templates/footer.php';
?>
