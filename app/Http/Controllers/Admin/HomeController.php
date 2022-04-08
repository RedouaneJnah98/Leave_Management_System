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
        $approved = LeaveApplication::where('leave_status', 'approved')->count();
        $not_approved = LeaveApplication::where('leave_status', 'not approved')->count();

        return view('admin.home', [
            'employees' => $employees,
            'leaves' => $leave,
            'pendings' => $pending,
            'approved' => $approved,
            'not_approved' => $not_approved
        ]);
    }

    public function reports()
    {
        $pending = LeaveApplication::where('leave_status', 'pending')->count();
        $approved = LeaveApplication::where('leave_status', 'approved')->count();
        $not_approved = LeaveApplication::where('leave_status', 'not approved')->count();
        
        return view('admin.report', [
            'pendings' => $pending,
            'approved' => $approved,
            'not_approved' => $not_approved
        ]);
    }
}
