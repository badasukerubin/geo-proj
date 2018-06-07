<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class RUserController extends Controller
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
        $user = User::latest()->paginate(30);
        return view('admin.users', ['user' => $user])->with(['page'=>'reg']);
    }

    public function destroy($id, $name)
    {
        $user = User::findOrFail($id);
        $user->delete();
        Session::flash('msg', 'User \'' . $name . '\' permanently deleted successfully');
        return redirect()->route('reg_user');
    }
}
