<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ManagementController extends Controller
{
    public function index()
    {
        return view('management.management'); // main listing blade
    }

    public function create()
    {
        return view('management.create');
    }



    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|unique:users,email',
            'mobile'   => 'required|digits:10',
            'password' => 'required|min:8',
            'branch'   => 'required|string',
            'role'     => 'required|string',
            'status'   => 'required|in:Active,Inactive',
            'access'   => 'nullable|array',
        ]);

        $inserted = DB::table('users')->insert([
            'name'        => $request->name,
            'email'       => $request->email,
            'mobile'      => $request->mobile,
            'password'    => Hash::make($request->password),
            'branch'      => $request->branch,
            'role'        => $request->role,
            'status'      => $request->status,
            'userName'    => $request->email,
            'access'      => $request->access ? json_encode($request->access) : null,
            'createdDate' => now(),
            'createdBy' => '01',
        ]);

        if ($inserted) {
            return redirect()->route('create-profile')
                ->with('status', 'User created successfully!');
        } else {
            return back()->with('error', 'User not created!');
        }
    }


    public function updateManagement(Request $request)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|unique:users,email',
            'mobile'   => 'required|digits:10',
            'password' => 'required|min:8',
            'branch'   => 'required|string',
            'role'     => 'required|string',
            'status'   => 'required|in:Active,Inactive',
            'access'   => 'nullable|array', // checkboxes array allow
        ]);

        $user = new User();
        $user->name     = $request->name;
        $user->email    = $request->email;
        $user->mobile   = $request->mobile;
        $user->password = Hash::make($request->password);
        $user->branch   = $request->branch;
        $user->role     = $request->role;
        $user->status   = $request->status;
        $user->access   = json_encode($request->access); // ✅ array ko JSON me save karo


        $user->save();

        return redirect()->route('create-profile')
            ->with('status', 'User created successfully!');
    }
    public function managementDetail($id)
    {
        $user = User::find($id);
        // dd($user->access);
        return view("management.managementDetail", compact('user'));
    }

    public function managementList(Request $request)
    {
        if ($request->ajax()) {
            $users = User::select(['id', 'name', 'userName', 'email', 'mobile', 'branch', 'role', 'status', 'created_at'])
                ->get();

            return response()->json([
                "data" => $users
            ]);
        }

        return view('management.management');
    }

    public function ivrStatus()
    {
        return view('management.ivrStatus');
    }

    public function blackList()
    {
        return view('management.blackList');
    }

    public function loginLog()
    {
        return view('management.loginLog');
    }
}
