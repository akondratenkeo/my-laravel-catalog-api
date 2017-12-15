<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function about(Request $request)
    {

        //$request->session()->forget(['ddd.aa', 'ccc']);
        $first = session()->all();
        var_dump($first);

        $value = $request->session()->pull('ddd.cc');
        $first = session()->all();
        var_dump($first, $value);

        var_dump($request->session()->get('status1'));

        $request->session()->keep('status1');

        $first = null;

        $last = 'Kondratenko';

        $people = [
            'Julia', 'Kostik', 'Roman', 'Zarina'
        ];

        return view('front.pages.about', compact('first', 'last', 'people'));
    }

    public function contacts()
    {
        return view('front.pages.contacts');
    }
}
