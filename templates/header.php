<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/source/core.php';
$key = 'sort';
$sort = SORT_ASC;
$menu = arraySort((getMenu()), $key, $sort);
foreach ($menu as $key => $value) {
    $length = 11;
    $appends = '...';
    $width = 0;
    $menu[$key]['title'] = mb_strlen($value['title']) > 15 ? cutString(($value['title']), $width, $length, $appends) : $value['title'];
}
?>
<!doctype html>
<html class="antialiased" lang="ru">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Площади фигур, смена регистра текста, погода в ульяновске, время unix"> 
	  <meta name="Keywords" content="расчет площади, простой калькулятор, убрать капс, капс, сменить регистр, погода в ульяновске, время unix">
    <meta name="robots" content="index,follow"/>
    <title>PHP Development</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
    <link href="/source/css/style.css" rel="stylesheet">
    <script>
    document.ondragstart = test;
    document.onselectstart = test;
    document.oncontextmenu = test;
    
    function test() {
      return false
      }
    </script>
</head>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="/">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle show" href="" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                Dropdown
              </a>
              <?php templateInclude('menu.php', ['menu' => $menu]); ?>
        </div>
      </div>
    </nav>
</nav>
