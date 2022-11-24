<?php
$dl=file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/source/servicetxt/registr.txt");
print $dl;
$delstring = fopen($_SERVER['DOCUMENT_ROOT'] . "/source/servicetxt/registr.txt","w+");
$del=' ';
fwrite($delstring, $del);
fclose($delstring);
?>