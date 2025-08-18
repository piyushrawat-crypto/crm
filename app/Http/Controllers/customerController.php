<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request; // 👈 add this
use Yajra\DataTables\Facades\DataTables;
class CustomerController extends Controller
{
    public function index()
    {
        return view('customer.customerList');
    }


    public function customerData(Request $request)
    {
        if ($request->ajax()) {
            $data = Customer::select([
                'customerID',
                'name',
                'email',
                'mobile',
                'pancard',
                'aadharNo',
                'isVerified',
            ]);

            return DataTables::of($data)->make(true);
        }

        abort(404);
    }

    public function customerEdit(){
        return view('customer.customerEdit');
    }
}
