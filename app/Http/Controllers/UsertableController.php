<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usertable;

class UsertableController extends Controller
{
    public function index()
    {
        $usertable = Usertable::all();
        return response()->json($usertable);
    }
}

