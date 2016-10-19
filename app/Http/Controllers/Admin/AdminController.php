<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     */
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the admin application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect()->action('Admin\DashboardController@index');
    }
}
