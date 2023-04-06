<!doctype html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport"
         content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
   <title>Main site</title>
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
   <style>
      body {
         font-family: 'Roboto Slab', serif;
      }
   </style>
</head>
<body>
   <header>
      <nav class='navbar navbar-expand-lg navbar-dark bg-dark'>
         <div class='container'>
            <div class='collapse navbar-collapse justify-content-md-center'>
               <ul class='navbar-nav'>
                  <li class="nav-item">
                     <a href="<?= app()->route->getUrl('/hello')?>" class='nav-link'>Главная</a>
                  </li>
                  <?php
                  if($_SESSION['role_id'] === 1):
                  ?>
                  <li class="nav-item">
                     <a href="<?= app()->route->getUrl('/signup')?>" class='nav-link'>Регистрация оператора</a>
                  </li>
                  <?php 
                  endif;
                  ?>
                  <?php
                  if(!app()->auth::check()): ?>
                  <li class="nav-item">
                     <a href="<?= app()->route->getUrl('/login')?>" class='nav-link'>Вход</a>
                  </li>
                  <?php
                  else: ?>
                     <li class="nav-item">
                        <a href="<?= app()->route->getUrl('/subscribers')?>" class='nav-link'>Абоненты</a>
                     </li>
                     <li class="nav-item">
                        <a href="<?= app()->route->getUrl('/subunits')?>" class='nav-link'>Подразделения</a>
                     </li>
                     <li class="nav-item">
                        <a href="<?= app()->route->getUrl('/rooms')?>" class='nav-link'>Помещения</a>
                     </li>
                     <li class="nav-item">
                        <a href="<?= app()->route->getUrl('/logout')?>" class='nav-link'>Выход(<?= app()->auth::user()->name ?>)</a>
                     </li>
                  <?php
                  endif;
                  ?>
               </ul>
            </div>
         </div>
      </nav>  
   </header>
   <main>
      <?= $content ?? '' ?>
   </main>
</body>
</html>