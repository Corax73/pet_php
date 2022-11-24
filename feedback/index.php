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
  </style>
<div id="wrap">
<div id="wrap1">
    <div class="block">
<body background="/img/fon.jpg" bgproperties="fixed">
<div><h1 class="h1">Обратная связь<h1>
 <br>
 <body>
  <form action="file.php" method="post">
  <h6>Ваше имя<h6>
   <p><input name="name"  placeholder="Имя"/></p>
   <br>
   <h6>Ваш e-mail для связи<h6>
   <p><input name="surname" placeholder="Почта"/></p>
   <br>
   <h6>Ваше сообщение<h6>
   <p><textarea name="comment"></textarea></p>
   <p><input type="submit" value="Отправить"></p>
  </form>
  <br>
  <p><a href="/"> Вернуться на главную</a></p>
 </body>
</body>
</div>
</div>
</div>
<?php
include $_SERVER['DOCUMENT_ROOT'] . '/templates/footer.php';
?>
