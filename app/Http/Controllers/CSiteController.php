<?php

namespace App\Http\Controllers;

use App\Clear;
use Illuminate\Http\Request;

class CSiteController extends Controller
{
    public function clear($data)
    {
        $actions = new Clear(array(
            'data' => $data
        ));

        $action = $actions->save();

        if ($action){
            return response()->json(['status'=>'success'], 200);
        }

        return response()->json(['status'=>'errors', 'msg'=>'something went wrong'], 401);
    }
}
