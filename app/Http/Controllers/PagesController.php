<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function about()
    {
        $first = null;
        $last = 'Kondratenko';

        //$people = null;

        $people = [
            'Julia', 'Kostik', 'Roman', 'Zarina'
        ];

        return view('pages.about', compact('first', 'last', 'people'));
    }

    public function contacts()
    {
        return view('pages.contacts');
    }
}
