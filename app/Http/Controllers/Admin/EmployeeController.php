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

        // Image Name
        $image_name = $request->file('profile')->getClientOriginalName();
        $request->file('profile')->storeAs('public/images', $image_name);

        // Get Department ID from Form
//        $department_id = $request->input('department');
//        $designation_id = $request->input('designation');

//        $department = Department::find($department_id);
//        $designation = Designation::find($designation_id);
//
//        $employee = new User();

//        $employee->id_number = $request->input('id_number');
//        $employee->first_name = $request->input('first_name');
//        $employee->middle_name = $request->input('middle_name');
//        $employee->last_name = $request->input('last_name');
//        $employee->gender = $request->input('gender');
//        $employee->age = $request->input('age');
//        $employee->email = $request->input('email');
//        $employee->contact = $request->input('contact');
//        $employee->username = $request->input('username');
//        $employee->status = $request->input('status');
//        $employee->image_profile = $image_name;
//        $employee->password = Hash::make($request->input('password'));
//
//        $department->employees()->save($employee);
//        $designation->employees()->save($employee);

        // save the relationship between the employee and department&designation models


        $insertEmployee = User::create([
            'designation_id' => $request->input('designation'),
            'department_id' => $request->input('department'),
            'id_number' => $request->input('id_number'),
            'first_name' => $request->input('first_name'),
            'middle_name' => $request->input('middle_name'),
            'last_name' => $request->input('last_name'),
            'gender' => $request->input('gender'),
            'age' => $request->input('age'),
            'email' => $request->input('email'),
            'contact' => $request->input('contact'),
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
