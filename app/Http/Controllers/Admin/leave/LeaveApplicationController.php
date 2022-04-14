<?php

namespace App\Http\Controllers\Admin\leave;

use App\Http\Controllers\Controller;
use App\Models\LeaveApplication;
use App\Models\LeaveType;
use Illuminate\Http\Request;
use function auth;
use function redirect;
use function view;

class LeaveApplicationController extends Controller
{
    public function index()
    {
        $leave_types = LeaveType::all();

        return view('employee.apply_leave', compact('leave_types'));
    }

    public function application(Request $request)
    {
        $request->validate([
            '*' => 'required',
        ]);

        $insertApplication = LeaveApplication::create([
            'leave_type_id' => $request->input('leave_type'),
            'employee_id' => auth()->user()->id,
            'from_date' => $request->input('from_date'),
            'to_date' => $request->input('to_date'),
        ]);

        if ($insertApplication) {
            return redirect()->route('employee.applications')->with('success', "Success! You've applied for a leave");
        } else {
            return redirect()->route('employee.application')->with('fail', 'Error! something went wrong, try again');
        }
    }
}
