<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class RAdminController extends Controller
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
        $admin = Admin::latest()->paginate(30);
        return view('admin.admins', ['admin' => $admin])->with(['page'=>'rega']);
    }

    public function destroy($id, $name)
    {
        $user = Admin::findOrFail($id);
        $user->delete();
        Session::flash('msg', 'Admin \'' . $name . '\' permanently deleted successfully');
        return redirect()->route('reg_admin');
    }
}
