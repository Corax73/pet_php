<?php
$sl=file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/source/servicetxt/square.txt');
print $sl;
$delstring = fopen($_SERVER['DOCUMENT_ROOT'] . '/source/servicetxt/square.txt',"w+");
$del=' ';
fwrite($delstring, $del);
fclose($delstring);
?>