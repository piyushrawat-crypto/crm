<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request; // 👈 add this

class CustomerController extends Controller
{
    public function index()
    {
        return view('customer.customerList');
    }


    public function customerData(Request $request)
    {
        if ($request->ajax()) {
            $Customer = Customer::select([
                'customerID',
                'name',
                'email',
                'mobile',
                'pancard',
                'aadhar_no',
                'isVerified'
            ])
                ->get();

            return response()->json([
                "data" => $Customer
            ]);
        }

        return view('management.management');
    }
}
