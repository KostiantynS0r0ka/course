<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function showAll(Request $request)
    {
        $customers = Customer::all();

        return view('customers', ['customerList' => $customers, 'flag' => 'it is here']);
    }

    public function showCustomerData(Request $request, Customer $customer)
    {
        $customerData = $customer->data;

        return view(
            'customerData',
            [
                'customer'     => $customer,
                'customerData' => $customerData
            ]
        );
    }
}
