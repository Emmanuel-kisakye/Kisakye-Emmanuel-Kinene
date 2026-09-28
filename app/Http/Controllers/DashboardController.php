<?php

namespace App\Http\Controllers;

use App\Models\ServiceRequest;

class DashboardController extends Controller
{
    public function index()
    {
        $recentRequests = ServiceRequest::query()
            ->with(['department', 'category'])
            ->latest()
            ->limit(5)
            ->get();

        return view('dashboard', compact('recentRequests'));
    }
}
