<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\LeaveApplication;
use Illuminate\Http\Request;

class EmployeeHomeController extends Controller
{
    private int $id;

    public function index()
    {
        $leave = LeaveApplication::where('employee_id', $this->getId())->count();
        $approved = LeaveApplication::where('employee_id', $this->getId())->where('leave_status', 'approved')->count();
        $pending = LeaveApplication::where('employee_id', $this->getId())->where('leave_status', 'pending')->count();
        $not_approved = LeaveApplication::where('employee_id', $this->getId())->where('leave_status', 'not approved')->count();

        return view('employee.home', [
            'leaves' => $leave,
            'approved' => $approved,
            'pending' => $pending,
            'not_approved' => $not_approved,
        ]);
    }

    public function getId()
    {
        $employee_id = auth()->user()->id;
        return $this->id = $employee_id;
    }

    public function leave_applications()
    {
        $applications = LeaveApplication::where('employee_id', $this->getId())->get();

        return view('employee.leave_status', compact('applications'));
    }
}
