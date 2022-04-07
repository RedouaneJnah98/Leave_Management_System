<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\LeaveApplication;
use App\Models\User;
use Illuminate\Database\Query\Builder;

class HomeController extends Controller
{
    public function index()
    {
        $employees = User::count();
        $leave = LeaveApplication::count();
        $pending = LeaveApplication::where('leave_status', 'pending')->count();

        return view('admin.home', ['employees' => $employees, 'leaves' => $leave, 'pendings' => $pending]);
    }
}
