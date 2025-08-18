<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'mobile' => 'required|digits:10',
            'password' => 'required|min:8',
            'branch' => 'required|string',
            'role' => 'required|string',
            'status' => 'required|in:Active,Inactive',
            'access'   => 'nullable|array', // Allow array access


        ]);

        $user = new User();
        $user->name     = $request->name;
        $user->email    = $request->email;
        $user->mobile   = $request->mobile;
        $user->password = Hash::make($request->password);
        $user->branch   = $request->branch;
        $user->role     = $request->role;
        $user->status   = $request->status;
        $user->access   = json_encode($request->access); // convert array to JSON

        $user->save();
        $request->session()->put('user_id', $user->id);
        $request->session()->put('user_name', $user->name);
        // event(new Registered($user));

        // Auth::login($user);

        return redirect()->route('login')->with('status', 'Registration successful! Please login.');
    }
}
