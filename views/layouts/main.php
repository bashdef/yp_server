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
</head>
<body>
   <header>
      <ul class='nav'>
         <a href="<?= app()->route->getUrl('/hello')?>" class='nav-link'>Главная</a>
         <?php
         if(!app()->auth::check()): ?>
            <a href="<?= app()->route->getUrl('/login')?>" class='nav-link'>Вход</a>
            <a href="<?= app()->route->getUrl('/signup')?>" class='nav-link'>Регистрация</a>
         <?php
         else: ?>
            <a href="<?= app()->route->getUrl('/logout')?>" class='nav-link'>Выход(<?= app()->auth::user()->name ?>)</a>
         <?php
         endif;
         ?>
      </ul>
   </header>
   <main>
      <?= $content ?? '' ?>
   </main>
</body>
</html>