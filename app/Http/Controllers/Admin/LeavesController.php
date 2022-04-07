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

//    public function create()
//    {
//        //
//    }
//
//    public function store(Request $request)
//    {
//        //
//    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
