<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class DataController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.upload')->with(['page'=>'upload']);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'data' => 'required',
        ]);

        $data = $request->file('data');
        $newName = 'kenya.json';

        $path = public_path('spatial_data/');
        if (!File::exists($path)) {
            File::makeDirectory($path, 0775);
        }
        $data->move($path, $newName);

        return back()->with('success', 'Spatial data has been successfully uploaded.');
    }
}
