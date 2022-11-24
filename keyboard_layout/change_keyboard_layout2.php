<?php
$dl=file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/source/servicetxt/keyboard_layout.txt");
print $dl;
$delstring = fopen($_SERVER['DOCUMENT_ROOT'] . "/source/servicetxt/keyboard_layout.txt","w+");
$del=' ';
fwrite($delstring, $del);
fclose($delstring);
?>