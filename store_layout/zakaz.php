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
<?php
$name = $_POST['name'];
$surname = $_POST['surname'];
$comment = $_POST['comment'];
$file = fopen($_SERVER['DOCUMENT_ROOT'] . '/source/servicetxt/zakaz.txt',"a+");
fwrite($file,"\n $name:$surname:\n $comment \n");
fclose($file);
print '<style>
   .shadowtext {
    text-shadow: 1px 1px 2px black, 0 0 1em blue; /* Параметры тени */
    color: darkblue; /* Белый цвет текста */
    font-size: 2em; /* Размер надписи */
   }
   </style>
<h1 class="shadowtext">Ваше заказ взят в работу</h1>';
?>
<p><a href="/"> Вернуться на главную</a></p>
</div>
</div>
<?php
include $_SERVER['DOCUMENT_ROOT'] . '/templates/footer.php';
?>