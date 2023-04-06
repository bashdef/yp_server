<?php

use Src\Route;

Route::add('GET', '/hello', [Controller\Site::class, 'hello'])->middleware('auth');
Route::add(['GET', 'POST'], '/signup', [Controller\Site::class, 'signup']);
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout']);
Route::add('GET', '/rooms', [Controller\Site::class, 'rooms'])->middleware('auth');
Route::add('GET', '/subunits', [Controller\Site::class, 'subunits'])->middleware('auth');
Route::add('GET', '/subscribers', [Controller\Site::class, 'subscribers'])->middleware('auth');