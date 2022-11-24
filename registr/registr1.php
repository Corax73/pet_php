<?php
if(empty($_POST['text'])){
exit("<meta http-equiv='refresh' content='0; url= http://k98768fx.beget.tech/registr/'>");
}   else {
    $b=$_POST['text'];
}
$b= substr($b, 0, 1500);
if ($_POST['registr']==2) {
	$c = mb_strtoupper($b);
	
} elseif ($_POST['registr']==1) {
	$c = mb_strtolower($b);
}
$registr = fopen($_SERVER['DOCUMENT_ROOT'] . "/source/servicetxt/registr.txt","w+");
fwrite($registr, $c);
fclose($registr);
exit("<meta http-equiv='refresh' content='0; url= http://k98768fx.beget.tech/registr/'>");
?>