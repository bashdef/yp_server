<?php
namespace Middlewares;

use Src\Auth\Auth;
use Src\Request;

class AdminMiddleware
{
    public function handle(Request $request)
    {
        if($_SESSION['role_id'] != 1){
            app()->route->redirect('/hello');
        }
    }
}