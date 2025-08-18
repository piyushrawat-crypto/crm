<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user(); // breeze uses Auth::user()

        // If you're storing accessPer as JSON like: ["loan", "collection", "report"]
        $per1 = [];

        if ($user && $user->access) {
            $per1 = json_decode($user->access, true);
        }

        return view('dashboard', compact('per1'));
    }
}
