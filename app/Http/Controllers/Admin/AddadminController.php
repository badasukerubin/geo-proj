<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AddadminController extends Controller
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
        return view('admin.add_admins')->with(['page'=>'rega']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request)
    {
        //

        $this->validate($request, [
            'fullname' => 'required',
//            'username' => 'unique:admins|required',
//            'phonenumber' => 'required|numeric|min:11',
//            'school' => 'required',
            'email' => 'required|string|email|max:255',
            'password' => 'required|alphaNum|min:6',
        ]);

        $sponsors = new Admin(array(
            'name'=> $request->get('fullname'),
//            'username'=> $request->get('username'),
//            'phonenumber'=> $request->get('phonenumber'),
//            'school'=> $request->get('school'),
            'email'=> $request->get('email'),
//            'role'=>0,
            'password'=> bcrypt($request->get('password')),
//            'p_id' => bin2hex(random_bytes(15)),
//            'to_delete'=>0,
        ));
        $sponsors->save();
        return back()->with('success', 'The Admin has successfully been added.');
    }
}
