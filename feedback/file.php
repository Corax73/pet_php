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
<?php
$name = $_POST['name'];
$surname = $_POST['surname'];
$comment = $_POST['comment'];
if (empty($name) or empty($surname) or empty($comment)) {
    echo '<br>Вы ввели пробелы вместо данных</td></tr></table></p></p>
 <br><p align="center"><a href="/">Вернуться на главную</a></p>';
 echo '<meta http-equiv="refresh" content="2;URL=http://refact/feedback"/>';
    exit();
}
$file = fopen($_SERVER['DOCUMENT_ROOT'] . "/source/servicetxt/feedback.txt","a+");
fwrite($file,"\n $name:$surname:\n $comment \n");
fclose($file);
print '<!doctype html>
<html lang="ru">
<meta charset="utf-8">
Ваше сообщение отправлено
<br>
</html>';
?>
<p><a href="/">Вернуться на главную</a></p>
    </body>
    </div>
</div>