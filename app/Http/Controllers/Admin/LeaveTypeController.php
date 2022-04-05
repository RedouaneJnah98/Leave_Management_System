<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\LeaveType;
use Illuminate\Http\Request;

class LeaveTypeController extends Controller
{

    public function index(LeaveType $leave_type)
    {
        $leaveType = $leave_type->all();

        return view('admin.leave_type.index', compact('leaveType'));
    }

    public function create()
    {
        return view('admin.leave_type.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'leave_name' => 'unique:leave_types',
            '*' => 'required',
        ]);

        $insertLeaveType = LeaveType::create($request->all());

        if ($insertLeaveType) {
            return redirect()->route('admin.leave_type.index')->with('success', "Success! You've added a new Leave Type");
        } else {
            return redirect()->route('admin.leave_type.create')->with('fail', 'Error! Something went wrong');
        }
    }

    public function edit(LeaveType $leave_type)
    {
        return view('admin.leave_type.edit', compact('leave_type'));
    }

    public function update(Request $request, LeaveType $leave_type)
    {
        $request->validate([
            '*' => 'required',
            'leave_name' => 'unique:leave_types,leave_name',
        ]);

        $updateLeaveType = $leave_type->update($request->all());

        if ($updateLeaveType) {
            return redirect()->route('admin.leave_type.index')->with('success', "Success! You've changed Leave Type");
        } else {
            return redirect()->route('admin.leave_type.create')->with('fail', 'Error! Something went wrong');
        }
    }

    public function destroy(LeaveType $leave_type)
    {
        $leave_type->delete();

        return redirect()->route('admin.leave_type.index')->with('delete', 'Leave Type deleted');
    }
}
