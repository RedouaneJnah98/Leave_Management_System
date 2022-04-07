<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\LeaveApplication;

class LeavesController extends Controller
{
    public function all_leaves()
    {
        $leave_applications = LeaveApplication::all();

        return view('admin.leaves.all', compact('leave_applications'));
    }
}
