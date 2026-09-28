<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use App\Models\ServiceRequest;

class DashboardController extends Controller
{
    public function index()
    {
        $queue = ServiceRequest::query()
            ->with(['department', 'category'])
            ->latest()
            ->limit(10)
            ->get();

        return view('staff.dashboard', compact('queue'));
    }
}
