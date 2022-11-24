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
	<h1 class="shadowtext">Корзина</h1>
  </header>
  <body>
  <?php
//print_r ($_POST['basket']);
$vibor=$_POST['basket'];
//print_r($vibor[0]);
$zakaz=array_sum ($vibor);
?>
  <h3>Вы выбрали на сумму <?php print $zakaz;?> уе</h3>
 <form action="zakaz.php" method="post">
  <h6>Ваше имя для оформления заказа<h6>
   <p><input name="name"  placeholder="Имя"/></p>
   <br>
   <h6>Ваш e-mail для связи<h6>
   <p><input name="surname" placeholder="Почта"/></p>
   <br>
   <h6>Ваше комментарии<h6>
   <p><textarea name="comment"></textarea></p>
   <p><input type="submit" value="Заказать"></p>
  </form>
  </body>
  <p><a href="/store_layout/"> Вернуться в магазин</a></p>
  <br>
  <p><a href="/"> Вернуться на главную</a></p>
  </div>
</div>
  <?php
include $_SERVER['DOCUMENT_ROOT'] . '/templates/footer.php';
?>
