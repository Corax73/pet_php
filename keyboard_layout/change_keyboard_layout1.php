<?php
if(empty($_POST['text'])){
exit("<meta http-equiv='refresh' content='0; url= http://k98768fx.beget.tech/keyboard_layout/'>");
}   else {
    $b=$_POST['text'];
}

$arrEnlayout = ['q' => 'й', 'w' => 'ц', 'e' => 'у', 'r' => 'к', 
	't' => 'е', 'y' => 'н', 'u' => 'г', 'i' => 'ш', 'o' => 'щ', 
	'p' => 'з', '[' => 'х', ']' => 'ъ', 'a' => 'ф', 
	's' => 'ы', 'd' => 'в', 'f' => 'а', 'g' => 'п', 
	'h' => 'р', 'j' => 'о', 'k' => 'л', 'l' => 'д',
	';' => 'ж', '\'' => 'э', 'z' => 'я', 'x' => 'ч',
	'c' => 'с', 'v' => 'м', 'b' => 'и', 'n' => 'т', 
	'm' => 'ь', ',' => 'б', '.' => 'ю', '/' => '.', ' ' => ' ',
	'Q' => 'Й', 'W' => 'Ц', 'E' => 'У', 'R' => 'К', 
	'T' => 'Е', 'Y' => 'Н', 'U' => 'Г', 'I' => 'Ш', 'O' => 'Щ', 
	'P' => 'З', 'A' => 'Ф', 'S' => 'Ы', 'D' => 'В', 
	'F' => 'А', 'G' => 'П', 'H' => 'Р', 'J' => 'О', 
	'K' => 'Л', 'L' => 'Д', 'Z' => 'Я', 'X' => 'Ч',
	'C' => 'С', 'V' => 'М', 'B' => 'И', 'N' => 'Т', 
	'M' => 'Ь',
	'`' => 'ё', '1' => '1', '2' => '2', '3' => '3', 
	'4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8',
	'9' => '9', '0' => '0', '-' => '-', '=' => '=', 
	'\\' => '/', '~' => '~', '!' => '!', '@' => '"', '#' => '№',
	'$' => ';', '%' => '%', '^' => ':', '&' => '?', 
	'*' => '*', '(' => '(', ')' => ')', '_' => '_', '+' => '+',
	'|' => '|'];

$b= substr($b, 0, 1500);
if ($_POST['change']==2) {
	$c = mb_strtoupper($b);
	
} elseif ($_POST['change']==1) {
	$c = str_replace('\'', '\'', $b);
	$outstringArr = str_split($c);
	$arrFlip = array_flip($outstringArr);
	$arrDiff = array_diff_key($arrFlip, $arrEnlayout);
	$variance = count($arrDiff);
	if ($variance > 0) {
		$rewriteString = $b;
	} else {
		$rewriteString = '';
		foreach ($outstringArr as $value) {
		$rewriteString = $rewriteString . $arrEnlayout[$value];
	}
}
}
$registr = fopen($_SERVER['DOCUMENT_ROOT'] . "/source/servicetxt/keyboard_layout.txt","w+");
fwrite($registr, $rewriteString);
fclose($registr);
exit("<meta http-equiv='refresh' content='0; url= http://k98768fx.beget.tech/keyboard_layout/'>");
?>