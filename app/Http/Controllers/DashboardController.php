<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Models\Cuisine;

class DashboardController extends Controller
{
    // COUNT TOTAL REGISTERED USERS
    public function totalUsers()
    {
        $totalUsers = DB::table('users')->count();
        return view('admin-dashboard', compact('totalUsers'));
    }
}
