<?php
$name = $_POST['name'];
$name = strip_tags ($name);
$email = $_POST['email'];
$email = strip_tags ($email);
$msg = $_POST['msg'];
$msg = strip_tags ($msg);
$dl = '';
$file = fopen($_SERVER['DOCUMENT_ROOT'] . '/source/servicetxt/comm.txt',"a+");
fwrite($file,"\n Имя: $name \n Email: $email Отзыв:\n $msg \n <br>");
fclose($file); 
$fd = fopen($_SERVER['DOCUMENT_ROOT'] . '/source/servicetxt/comm.txt', 'r') or die("не удалось открыть файл");
header("Location: http://refact/reviews/");
?>