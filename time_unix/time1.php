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
      <p><table>
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
   }
   td {
    background: navy; /* Цвет фона ячеек */
   }
  </style>
  <tr>
    <td>Время/Время UNIX</td>
    <td>
<?php
if (empty($_POST["a"])) {
    echo 'Вы не выбрали ни одного формата</td></tr></table></p></p>
 <br><p align="center"><a href="/"> Вернуться на главную</a></p>';
 echo '<meta http-equiv="refresh" content="2;URL=http://k98768fx.beget.tech/time_unix"/>';
    exit();
}   else {
    $b=$_POST['a'];
}
if (!empty($b[0])) {
    $c=$b[0];
	};
if ($c==1) {
    require_once $_SERVER['DOCUMENT_ROOT'] . '/source/db/boot.php';
	$query = pdo()->query("SELECT NOW()");
            $tmp = $query->fetchAll(PDO::FETCH_ASSOC);
            foreach ($tmp as $tmp) {
	                 foreach ($tmp as $datetime) {
		    echo $datetime . '<br>';
	               }
			};
}
	elseif ($c==2) {
    require_once $_SERVER['DOCUMENT_ROOT'] . '/source/db/boot.php';
	$query = pdo()->query("SELECT UNIX_TIMESTAMP ()");
            $tmp = $query->fetchAll(PDO::FETCH_ASSOC);
            foreach ($tmp as $tmp) {
	                 foreach ($tmp as $datetimeU) {
		    echo $datetimeU . '<br>';
	               }
			};
}
if (!empty($b[1])) {
    $d=$b[1];
	if ($d==2) {
    require_once $_SERVER['DOCUMENT_ROOT'] . '/source/db/boot.php';
	$query = pdo()->query("SELECT UNIX_TIMESTAMP ()");
            $tmp = $query->fetchAll(PDO::FETCH_ASSOC);
            foreach ($tmp as $tmp) {
	                 foreach ($tmp as $datetimeAll) {
		    echo $datetimeAll . '<br>';
	               }
			};
}
}
?>
</td>
 </tr>
  </table></p>
  
  </body>
 <p align="center"><a href="/"> Вернуться на главную</a></p>
 </div>
</div>
<?php
include $_SERVER['DOCUMENT_ROOT'] . '/templates/footer.php';
?>
