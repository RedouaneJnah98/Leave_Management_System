<?php

namespace App\Http\Controllers\Admin\employee;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class EmployeeAccountController extends Controller
{
//    public function index(User )
//    {
//        $employee_id = auth()->id();
//        $employee = User::where('id', $employee_id)->first();
//
//        return view('employee.account', compact('employee'));
//    }

    public function edit($id)
    {
//        $employee_id = auth()->id();
//        $employee = User::where('id', $id)->first();
        $employee = User::find($id)->first();

        return view('employee.account.edit', compact('employee'));
    }

    public function update(Request $request, $id)
    {
        $attributes = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'middle_name' => 'required',
            'age' => 'required|numeric',
            'email' => 'required|email',
            'profile' => 'image',
            'username' => 'required',
            'gender' => 'required',
            'contact' => 'required|numeric',
        ]);

        $imageName = $request->file('image_profile')->getClientOriginalName();
        $attributes['image_profile'] = $request->file('image_profile')->storeAs('images', $imageName);

        $updateProfile = User::find($id)->update($attributes);

        if ($updateProfile) {
            return back()->with('success', "Success! You've updated your profile");
        } else {
            return back()->with('fail', 'Error! Something went wrong, try again');
        }
    }
}
