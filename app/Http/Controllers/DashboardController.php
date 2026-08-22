<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'total_users' => 120,
            'total_orders' => 45,
            'revenue' => 'Rp 15.000.000',
        ];

        return view('dashboard', compact('stats'));
    }
}
