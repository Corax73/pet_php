
	<style>
   table {
    font-family: 'Times New Roman', Times, serif;
    font-size: 150%;
   } 
   p {
    font-family: Verdana, Arial, Helvetica, sans-serif; 
    font-size: 18pt;
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
	<body>
	    <style>
.my_button {
    width: 120px;
    height: 90px;
	font-size:1.2vw;
	font-weight: 1000;
}
</style>
<style type="text/css">
   #maket {
    width: 90%; /* Ширина всей таблицы */
    height: 50%;
   }
   TD {
    vertical-align: top; /* Вертикальное выравнивание в ячейках */
    padding: 5px; /* Поля вокруг ячеек */
    height: 60%;
   }
   TD#leftcol {
    width: 200px; /* Ширина левой колонки */
    background: #ccc; /* Цвет фона левой колонки */
    border: 1px solid #000; /* Параметры рамки */
   }
   TD#rightcol {
    background: navy; /* Цвет фона правой колонки */
    border: 1px solid #000; /* Параметры рамки */
    color: white;
   }
   #spacer {
    width: 10px; /* Расстояние между колонками */
   }
  </style>
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
        

  .h1 {
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
  .table {
    font-size: 12pt;
  }
  </style>
<div class="parent">
    <div class="block">
<h3 class="h1">Время/время UNIX</h3>
<form action="time1.php" method="POST">
   <p>Выберите формат вывода времени, один или оба</p>
   <p><input type="checkbox" name="a[]" value="1">MySQL DateTime</p>
   <p><input type="checkbox" name="a[]" value="2" checked>UNIX Time</p>
   <p><input type="submit" value="Выбрать"class="my_button"></p>
  </form>
  </body>
  <p align="center"><a href="/"> Вернуться на главную</a></p>

</div>
</div>
 </html>