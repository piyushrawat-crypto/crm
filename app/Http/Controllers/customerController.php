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

    public function customerEdit($id)
    {
        $customer = Customer::findOrFail($id);
        return view('customer.customerEdit', compact('customer'));
    }

    public function customerUpdate(Request $request)
    {
        $validated = $request->validate([
            'c_id'     => 'required|exists:customer,customerID',
            'name'     => 'required|string|max:255',
            'mobile'   => 'required|string|max:15',
            'email'    => 'required|email|max:255',
            'gender'   => 'required|in:Male,Female',
            'dob'      => 'required|date',
            'pancard'  => 'nullable|string|max:20',
            'aadharNo' => 'nullable|string|max:20',
        ]);

        // ✅ use custom PK
        $customer = Customer::findOrFail($validated['c_id']);

        $customer->update([
            'name'     => $validated['name'],
            'mobile'   => $validated['mobile'],
            'email'    => $validated['email'],
            'gender'   => $validated['gender'],
            'dob'      => $validated['dob'],
            'pancard'  => $validated['pancard'] ?? null,
            'aadharNo' => $validated['aadharNo'] ?? null,
        ]);

        return redirect()->back()->with('success', 'Customer updated successfully!');
    }
}
