<?php
namespace Controller;
use Model\Post;
use Src\View;
use Src\Request;
use Model\User;
use Src\Auth\Auth;
use Model\Room;
use Model\Subunit;
use Model\Subscribers;
class Site
{
    public function index(Request $request): string
    {
        $posts = Post::where('id', $request->id)->get();
        return (new View())->render('site.post', ['posts' => $posts]);
    }
    public function hello(): string
    {
        return new View('site.hello', ['message' => 'hello working']);
    }
    
    public function signup(Request $request): string
    {
        if($request->method==='POST' && User::create($request->all())){
            app()->route->redirect('/go');
        }
        return new View('site.signup');
    }

    public function login(Request $request): string
    {
        if($request->method === 'GET'){
            return new View('site.login');
        }
        if(Auth::attempt($request->all())){
            app()->route->redirect('/hello');
        }

        return new View('site.login', ['message' => 'Неправильные логин или пароль']);
    }
    public function logout(): void
    {
        Auth::logout();
        app()->route->redirect('/hello');
    }
    public function rooms(): string
    {
        $rooms = Room::all();
        return (new View())->render('site.rooms', ['rooms' => $rooms]);
    }
    public function subunits(): string
    {
        $subunits = Subunit::all();
        return (new View())->render('site.subunits', ['subunits' => $subunits]);
    }
    public function subscribers()
    {
        $subscribers = Subscribers::all();
        return (new View())->render('site.subscribers', ['subscribers' => $subscribers]);
    }
}