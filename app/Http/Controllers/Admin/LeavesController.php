<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\LeaveApplication;
use Illuminate\Http\Request;

class LeavesController extends Controller
{
    public function index()
    {
        $leave_applications = LeaveApplication::paginate(15);

        return view('admin.leaves.index', compact('leave_applications'));
    }

    public function pending()
    {
        $pending_leaves = LeaveApplication::where('leave_status', 'pending')->get();

        return view('admin.leaves.pending', compact('pending_leaves'));
    }

    public function edit(LeaveApplication $leave)
    {
        return view('admin.leaves.edit', compact('leave'));
    }

    public function update(Request $request, LeaveApplication $leave)
    {
        $updateLeaveApplication = $leave->update([
            'leave_status' => $request->input('status'),
            'remark' => $request->input('remark')
        ]);

        if ($updateLeaveApplication) {
            return redirect()->route('admin.leaves.index')->with('success', "Success! You changed Leave Application.");
        } else {
            return redirect()->route('admin.leaves.edit')->with('fail', 'Error! Something went wrong, try again.');
        }
    }

    public function destroy($id)
    {
        //
    }
}
