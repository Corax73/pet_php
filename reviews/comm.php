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
  <div class="parent">
    <div class="block">
<body background="/img/fon.jpg" bgproperties="fixed">
      <p>
    <table border="3">
        <style>
   table {
    font-family: 'Times New Roman', Times, serif;
    font-size: 30px;
    padding: 5px;
   } 
   p {
    font-family: Verdana, Arial, Helvetica, sans-serif; 
    font-size: 12pt;
   }
  </style>
  <style type="text/css">
   table {
    background: maroon; /* Цвет фона таблицы */
    color: white; /* Цвет текста */
    margin: auto;
   }
   td {
    background: navy; /* Цвет фона ячеек */
   }
   tr {
    background: navy; /* Цвет фона ячеек */
   }
  </style>
  <td>
<?php
$name = $_POST['name'];
$name = trim(strip_tags ($name));
$email = $_POST['email'];
$email = trim(strip_tags ($email));
$msg = $_POST['msg'];
$msg = trim(strip_tags ($msg));
if (empty($name) or empty($email) or empty($email) or empty($msg)) {
    echo '<br>Вы ввели пробелы вместо данных</td></tr></table></p></p>
 <br><p align="center"><a href="/"> Вернуться на главную</a></p>';
 echo '<meta http-equiv="refresh" content="2;URL=http://refact/reviews"/>';
    exit();
}
$dl = '';
$file = fopen($_SERVER['DOCUMENT_ROOT'] . '/source/servicetxt/comm.txt',"a+");
fwrite($file,"\n Имя: $name \n Email: $email Отзыв:\n $msg \n <br>");
fclose($file); 
$fd = fopen($_SERVER['DOCUMENT_ROOT'] . '/source/servicetxt/comm.txt', 'r') or die("не удалось открыть файл");
header("Location: http://refact/reviews/");
?>
</td>
 </table></p>
  
  </body>
 <p align="center"><a href="/"> Вернуться на главную</a></p>
 </div>
</div>
<?php
include $_SERVER['DOCUMENT_ROOT'] . '/templates/footer.php';
?>