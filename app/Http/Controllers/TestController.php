<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function requestTestHandler(Request $request)
    {
        $customers = Customer::find(2);
        dd($customers->myAwesomeRelation);
        //
        return "Finally! It's working!";
    }
}
