<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');

include $_SERVER['DOCUMENT_ROOT'] . '/weather_ulsk/class.weather.php';
      $oWeather = new soWeather();
echo '<pre>';
$weat=$oWeather->getWeatherData();
?>
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
      <h1>Погода в Ульяновске</h1>
<body>

<p><table>
    <table border="3">
        <style>
   table {
    font-family: 'Times New Roman', Times, serif;
    font-size: 150%;
   } 
   p {
    font-family: Verdana, Arial, Helvetica, sans-serif; 
    font-size: 14pt;
   }
  </style>
  <style type="text/css">
   table {
    border: 1px solid #a52a2a;
    background: maroon; /* Цвет фона таблицы */
    color: white; /* Цвет текста */
   }
   td {
    border: 1px solid #a52a2a;
    background: navy; /* Цвет фона ячеек */
   }
  </style>
  <tr>
    <td>Время замера</td>
    <td><?php $array = $weat[0];
    print_r ($array->dt); ?>
    </td>
    <td><?php $array = $weat[1];
    print_r ($array->dt); ?></td>
    <td><?php $array = $weat[2];
    print_r ($array->dt); ?></td>
    <td><?php $array = $weat[3];
    print_r ($array->dt); ?></td>
    <td><?php $array = $weat[4];
    print_r ($array->dt); ?></td>
    <td><?php $array = $weat[5];
    print_r ($array->dt); ?></td>
  </tr>
  <tr>
    <td>Температура водуха, °C</td>
    <td><?php $array = $weat[0];
    print_r ($array->temperature); ?>
    </td>
    <td><?php $array = $weat[1];
    print_r ($array->temperature); ?></td>
    <td><?php $array = $weat[2];
    print_r ($array->temperature); ?></td>
    <td><?php $array = $weat[3];
    print_r ($array->temperature); ?></td>
    <td><?php $array = $weat[4];
    print_r ($array->temperature); ?></td>
    <td><?php $array = $weat[5];
    print_r ($array->temperature); ?></td>
  </tr>
  <tr>
    <td>Атмосферное давление, мм рт. ст.</td>
    <td><?php $array = $weat[0];
    print_r ($array->pressure); ?>
    </td>
    <td><?php $array = $weat[1];
    print_r ($array->pressure); ?></td>
    <td><?php $array = $weat[2];
    print_r ($array->pressure); ?></td>
    <td><?php $array = $weat[3];
    print_r ($array->pressure); ?></td>
    <td><?php $array = $weat[4];
    print_r ($array->pressure); ?></td>
    <td><?php $array = $weat[5];
    print_r ($array->pressure); ?></td>
	</tr>
	<tr>
	<td>Скорость ветра, м/с</td>
    <td><?php $array = $weat[0];
    print_r ($array->windspeed); ?> </td>
    <td><?php $array = $weat[1];
    print_r ($array->windspeed); ?></td>
    <td><?php $array = $weat[2];
    print_r ($array->windspeed); ?></td>
    <td><?php $array = $weat[3];
    print_r ($array->windspeed); ?></td>
    <td><?php $array = $weat[4];
    print_r ($array->windspeed); ?></td>
    <td><?php $array = $weat[5];
    print_r ($array->windspeed); ?></td>
  </tr>
  <tr>
	<td>Тип погоды</td>
    <td><?php $array = $weat[0];
    print_r ($array->pogoda); ?></td>
    <td><?php $array = $weat[1];
    print_r ($array->pogoda); ?></td>
    <td><?php $array = $weat[2];
    print_r ($array->pogoda); ?></td>
    <td><?php $array = $weat[3];
    print_r ($array->pogoda); ?></td>
    <td><?php $array = $weat[4];
    print_r ($array->pogoda); ?></td>
    <td><?php $array = $weat[5];
    print_r ($array->pogoda); ?></td>
  </tr>
  </table></p>
  </body>
<p align="center"><a href="/"> Вернуться на главную</a></p>
</div>
</div>

</html>