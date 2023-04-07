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
use Src\Validator\Validator;
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
        if ($request->method === 'POST') {

            $validator = new Validator($request->all(), [
                'name' => ['required', 'english'],
                'login' => ['required', 'unique:users,login', 'english'],
                'password' => ['required', 'english'],
                'role_id' => ['role']
            ], [
                'required' => 'Поле :field пусто',
                'unique' => 'Поле :field должно быть уникально',
                'english' => 'Поле :field не должно содержать русских символов',
                'role' => 'Поле :field не выбрано'
            ]);
     
            if($validator->fails()){
                return new View('site.signup',
                    ['message' => json_encode($validator->errors(), JSON_UNESCAPED_UNICODE)]);
            }
     
            if (User::create($request->all())) {
                app()->route->redirect('/login');
            }
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
    public function subscribers(Request $request): string
    {
        $subscribers = Subscribers::all();
        $rooms = Room::all();
        $subunits = Subunit::all();
        if($request->method === 'GET'){
            return (new View())->render('site.subscribers', ['subscribers' => $subscribers, 'rooms' => $rooms, 'subunits' => $subunits]);
        } elseif($request->method === 'POST' && $request->get('type_form') == 'filter_subunit'){
            $subscribers = Subscribers::where('subunit_id', '=', $request->get('subunit_id'))->get();
            return (new View())->render('site.subscribers', ['subscribers' => $subscribers, 'subunits' => $subunits, 'rooms' => $rooms]);
        } elseif($request->method === 'POST' && $request->get('type_form') == 'filter_room'){
            $subscribers = Subscribers::where('room_id', '=', $request->get('room_id'))->get();
            return (new View())->render('site.subscribers', ['subscribers' => $subscribers, 'rooms' => $rooms, 'subunits' => $subunits]);
        } elseif($request->method === 'POST' && $request->get('type_form') == 'searchbar'){
            $subscribers = Subscribers::where('имя', '=', $request->get('search'))->get();
            return (new View())->render('site.subscribers', ['subscribers' => $subscribers, 'rooms' => $rooms, 'subunits' => $subunits]);
        } elseif($request->method === 'POST' && $request->get('type_form') == 'count_subunit')
        {
            $sum = 0;
            if($request->get('subunit_id') == 1){
                $subscribers = Subscribers::where('subunit_id', '=', $request->get('subunit_id'))->get();
                foreach($subscribers as $subscriber){
                    $sum += 1;
                }
                $subscribers = Subscribers::all();
            } elseif($request->get('subunit_id') == 2){
                $subscribers = Subscribers::where('subunit_id', '=', $request->get('subunit_id'))->get();
                $sum = 0;
                foreach($subscribers as $subscriber){
                    $sum += 1;
                }
                $subscribers = Subscribers::all();
            } elseif($request->get('subunit_id') == 3){
                $subscribers = Subscribers::where('subunit_id', '=', $request->get('subunit_id'))->get();
                $sum = 0;
                foreach($subscribers as $subscriber){
                    $sum += 1;
                }
                $subscribers = Subscribers::all();
            }
            elseif($request->get('subunit_id') == 4){
                $subscribers = Subscribers::where('subunit_id', '=', $request->get('subunit_id'))->get();
                $sum = 0;
                foreach($subscribers as $subscriber){
                    $sum += 1;
                }
                $subscribers = Subscribers::all();
            }
            elseif($request->get('subunit_id') == 5){
                $subscribers = Subscribers::where('subunit_id', '=', $request->get('subunit_id'))->get();
                $sum = 0;
                foreach($subscribers as $subscriber){
                    $sum += 1;
                }
                $subscribers = Subscribers::all();
            }
            return (new View())->render('site.subscribers', ['subscribers' => $subscribers, 'rooms' => $rooms, 'subunits' => $subunits, 'sum' => $sum]);
        } elseif($request->method === 'POST' && $request->get('type_form') == 'count_room'){
            $summ = 0;
            if($request->get('room_id') == 1){
                $subscribers = Subscribers::where('room_id', '=', $request->get('room_id'))->get();
                foreach($subscribers as $subscriber){
                    $summ += 1;
                }
                $subscribers = Subscribers::all();
            } elseif($request->get('room_id') == 2){
                $subscribers = Subscribers::where('room_id', '=', $request->get('room_id'))->get();
                foreach($subscribers as $subscriber){
                    $summ += 1;
                }
                $subscribers = Subscribers::all();
            }
            return (new View())->render('site.subscribers', ['subscribers' => $subscribers, 'rooms' => $rooms, 'subunits' => $subunits, 'summ' => $summ]);
        }
    }
}