<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class DepartmentController extends Controller
{
    public function index(Department $department)
    {
        $departments = $department->all();

        return view('admin.department.index', compact('departments'));
    }

    public function create()
    {
        return view('admin.department.create');
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'department_short_name' => 'required|unique:departments',
            'department_name' => 'required|unique:departments',
        ]);

        $insertDepartment = Department::create($attributes);

        if ($insertDepartment) {
            return redirect()->route('admin.department.index')->with('success', "Success! You've add a new Department");
        } else {
            return redirect()->route('admin.department.create')->with('fail', 'Error! Something went wrong, try again');
        }
    }

    public function edit(Department $department)
    {
        return view('admin.department.edit', compact('department'));
    }

    public function update(Request $request, Department $department)
    {
        $request->validate([
            'department_short_name' => ['required', Rule::unique('departments', 'department_short_name')->ignore($department->id)],
            'department_name' => ['required', Rule::unique('departments', 'department_name')->ignore($department->id)],
        ]);

        $updateDepartment = $department->update($request->all());

        if ($updateDepartment) {
            return redirect()->route('admin.department.index')->with('success', "Success! You've updated Department");
        } else {
            return redirect()->route('admin.department.edit')->with('fail', 'Error! Something went wrong, try again');
        }
    }

    public function destroy(Department $department)
    {
        $department->delete();

        return redirect()->route('admin.department.index')->with('delete', "You've deleted Department");
    }
}
