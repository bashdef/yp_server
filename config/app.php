<?php
use Validators;
return [
    'auth' => \Src\Auth\Auth::class,
    'identity' => \Model\User::class,
    'routeMiddleware' => [
        'auth' => \Middlewares\AuthMiddleware::class,
        'admin' => \Middlewares\AdminMiddleware::class,
        'login' => \Middlewares\LoginMiddleware::class,
    ],
    'validators' => [
        'required' => Validators\RequireValidator::class,
        'unique' => Validators\UniqueValidator::class,
        'english' => Validators\EnglishValidator::class,
        'role' => Validators\RoleValidator::class
    ],
    'routeAppMiddleware' => [
        'trim' => \Middlewares\TrimMiddleware::class,
        'specialChars' => \Middlewares\SpecialCharsMiddleware::class,
        'csrf' => \Middlewares\CSRFMiddleware::class,
    ],     
];