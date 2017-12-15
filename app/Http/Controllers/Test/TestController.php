<?php

namespace App\Http\Controllers\Test;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;

class TestController extends Controller
{
    public function index()
    {
        return 55;
    }

    public function foo()
    {
        return response('Hello World', 200)
            ->header('Content-Type', 'application/json')
            ->cookie('z-type', 'XXX', 3600);
    }

    public function bar(Request $request)
    {
        return response()
            ->json(['name' => 'Abigail', 'state' => 'CA'])
            ->withCallback($request->input('callback'));
    }
}
