<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    //
    public function index(Request $request)
    {
        //return response()->json();
        if($request->input('usuario')== "acevedosara" && $request->input('password')== "sara2018"){
            return response()->json(['success'=>true]);}
        else{
            return response()->json(['success'=>false]);
        }
        /* $usertable = Usertable::all();
        return response()->json($usertable); */
    }
}
