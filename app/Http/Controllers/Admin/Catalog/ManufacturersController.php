<?php

namespace App\Http\Controllers\Admin\Catalog;

use App\Models\Catalog\Manufacturers;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ManufacturersController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $manufacturers = Manufacturers::all();
        return view('admin.catalog.manufacturers.index', compact('manufacturers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.catalog.manufacturers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|min:3|max:50',
            'description' => 'required|string|max:1000',
            'sort_order' => 'integer',
            'meta_title' => 'required|string|min:3|max:150',
            'meta_description' => 'string',
        ]);

        $input = $request->all();

        $model = new Manufacturers();
        $model->loadModel($input);
        $model->save();

        return redirect()->action('Admin\Catalog\ManufacturersController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $manufacturer = Manufacturers::findOrFail($id);
        return view('admin.catalog.manufacturers.edit', compact('manufacturer'));
    }
}
