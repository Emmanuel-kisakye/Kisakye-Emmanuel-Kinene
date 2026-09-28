<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Department;
use App\Models\ServiceRequest;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'users' => User::query()->count(),
            'departments' => Department::query()->count(),
            'categories' => Category::query()->count(),
            'requests' => ServiceRequest::query()->count(),
        ];

        return view('admin.dashboard', compact('stats'));
    }
}
