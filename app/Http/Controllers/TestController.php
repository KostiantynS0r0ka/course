<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function requestTestHandler(Request $request)
    {
        dd($request);
        //
        return "Finally! It's working!";
    }
}
