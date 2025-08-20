<?php

namespace App\Http\Controllers;

use App\Models\Blacklist;
use App\Models\Ivrstatus;
use App\Models\Loginlogs;
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
        // Find the user by ID (make sure ID is passed in the form)
        $user = User::findOrFail($request->id);

        // Validate input
        $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|unique:users,email,' . $user->id, // ignore current user's email
            'mobile'   => 'required|digits:10',
            'branch'   => 'required|string',
            'role'     => 'required|string',
            'status'   => 'required|in:Active,In Active',
            'per'      => 'nullable|array', // Match the checkbox name in form
        ]);

        // Update fields
        $user->name     = $request->name;
        $user->email    = $request->email;
        $user->mobile   = $request->mobile;
        $user->userName = $request->userName ?? $user->userName;
        $user->branch   = $request->branch;
        $user->role     = $request->role;
        $user->status   = $request->status;

        // Update password only if filled
        if (!empty($request->password)) {
            $request->validate([
                'password' => 'min:8',
            ]);
            $user->password = Hash::make($request->password);
        }

        // Update access (permissions)
        $user->access = json_encode($request->per ?? []);

        $user->save();

        return redirect()->back()->with('status', 'User updated successfully!');
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

    public function blacklistData(Request $request)
    {
        if ($request->ajax()) {
            $users = Blacklist::select(['id', 'pan', 'mobile', 'email', 'created_date', 'remark'])
                ->get();
            return response()->json([
                "data" => $users
            ]);
        }
    }


    public function addBlackList()
    {
        return view('management.addBlackList');
    }

    public function loginLog()
    {
        return view('management.loginLog');
    }

    public function createBlackList(Request $request)
    {
        // ✅ Validation
        $request->validate([
            'pan'    => 'required',
            'email'  => 'required|',
            'mobile' => 'required|',
            'remark' => 'required|string|max:255',
        ]);

        // ✅ Insert record
        Blacklist::create([
            'pan'        => $request->pan,
            'email'      => $request->email,
            'mobile'     => $request->mobile,
            'remark'     => $request->remark,
            'created_date' => now(),
        ]);

        // ✅ Redirect with success message
        return redirect()->back()->with('success', 'Blacklist entry created successfully!');
    }

    public function ivrStatusData(Request $request)
    {
        if ($request->ajax()) {
            $users = Ivrstatus::select([
                'id',
                'type',
                'ivrstageName as ivr_status_name',
                'ivrurl as url',
                'status',
                'credatedDate as created_at',

            ])->get();

            return response()->json([
                "data" => $users
            ]);
        }
    }

    public function editIvrstatus($id)
    {
        $ivr = Ivrstatus::find($id);
        // dd($user->access);
        return view("management.editIvrStatus", compact('ivr'));
    }

    public function updateIvrstatus(Request $request)
    {
        // ✅ Validate input
        $validated = $request->validate([
            'type'         => 'required|string',
            'ivrstageName' => 'required|string|max:255',
            'iconCode'     => 'required|string|max:255',
            'status'       => 'required|string',
            'appmsg'       => 'nullable|string',
        ]);

        if ($request->id) {
            // ✅ Update existing record
            $ivr = Ivrstatus::findOrFail($request->id);
            $ivr->update($validated);
            $msg = "IVR Status updated successfully!";
        } else {
            // ✅ Create new record
            Ivrstatus::create($validated);
            $msg = "IVR Status created successfully!";
        }

        // ✅ Redirect back with success message
        return redirect()->back()->with('success', $msg);
    }
    public function loginlogsData(Request $request)
    {
        if ($request->ajax()) {
            $logs = Loginlogs::select([
                'id',
                'name',
                'ip',
                'email',
                'userID',
                'loginStart',
                'logoutEnd',
            ])->get();

            return response()->json([
                "data" => $logs
            ]);
        }
    }
}
