<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        $totalUsers = User::count();
        $newUsersThisMonth = User::whereMonth('created_at', now()->month)
            ->whereYear('created_at', now()->year)
            ->count();
        $recentUsers = User::latest()->take(5)->get();

        return view('pages.dashboard', compact('totalUsers', 'newUsersThisMonth', 'recentUsers'));
    }
}
