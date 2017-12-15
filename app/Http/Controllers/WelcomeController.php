<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;

class WelcomeController extends Controller
{
    /**
     * Реализация базы данных Redis.
     */
    protected $redis;

    /**
     * Создание нового экземпляра обработчика событий.
     *
     * @param  User  $redis
*/
    public function __construct(User $redis)
    {
        $this->redis = $redis;
    }

    public function index(Request $request)
    {
        $request->session()->put(['ddd' => [
            'aa' => 11,
            'bb' => 22,
        ]]);
        $request->session()->put('ccc', 123);
        session(['null' => null]);

        $request->session()->push('ddd.cc', 'developers');

        \Helps::test();

        $request->session()->push('ddd.cc', 'users');
        $request->session()->push('ddd.cc', 'admins');

        $request->session()->flash('status1', 'Task1 was successful!');
        $request->session()->flash('status2', 'Task2 was successful!');
        $request->session()->flash('status3', 'Task3 was successful!');

        return view('welcome');
    }
}
