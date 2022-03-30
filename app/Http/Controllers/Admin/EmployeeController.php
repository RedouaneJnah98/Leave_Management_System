<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Designation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
    public function index(User $employee)
    {
        $employees = $employee->paginate(10);

        return view('admin.employee.index', compact('employees'));
    }

    public function create(Designation $designation, Department $department)
    {
        $departments = $department->all();
        $designations = $designation->all();

        return view('admin.employee.create', ['designations' => $designations, 'departments' => $departments]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_number' => 'required|unique:users',
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'gender' => 'required',
            'age' => 'required',
            'email' => 'required|unique:users',
            'contact' => 'required',
            'department' => 'required',
            'designation' => 'required',
            'username' => 'required|unique:users',
            'status' => 'required',
            'password' => 'required|min:5|max:30',
        ]);

        // Get Department ID from Form
//        $departmentID = $user->department()->pluck('id');
//        $designationID = $user->designation()->pluck('id');

        $image_name = $request->file('profile')->getClientOriginalName();
        $request->file('profile')->storeAs('public/images', $image_name);

        $insertEmployee = User::create([
            'id_number' => $request->input('id_number'),
            'first_name' => $request->input('first_name'),
            'middle_name' => $request->input('middle_name'),
            'last_name' => $request->input('last_name'),
            'gender' => $request->input('gender'),
            'age' => $request->input('age'),
            'email' => $request->input('email'),
            'contact' => $request->input('contact'),
            'department' => $request->input('department'),
            'designation' => $request->input('designation'),
            'username' => $request->input('username'),
            'status' => $request->input('status'),
            'image_profile' => $image_name,
            'password' => Hash::make($request->input('password')),
        ]);

        if ($insertEmployee) {
            return redirect()->route('admin.employee.index')->with('success', "Success! You've added a new Employee");
        } else {
            return redirect()->route('admin.employee.create')->with('fail', 'Error! Something went wrong, try again');
        }
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
