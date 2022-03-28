<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{

    public function index(Admin $user)
    {
        // we use Route Model Binding to retreive all the data from DB
        $admins = $user->paginate(10);

        return view('admin.users.index', compact('admins'));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
//        $request->validate([
//            'id_number' => 'required|unique:users',
//            'first_name' => 'required',
//            'middle_name' => 'required',
//            'last_name' => 'required',
//            'gender' => 'required',
//            'age' => 'required',
//            'email' => 'required|unique:users',
//            'contact' => 'required',
//            'department' => 'required',
//            'designation' => 'required',
//            'username' => 'required|unique:users',
//            'status' => 'required',
//            'password' => 'required',
//        ]);

        $request->validate([
            'name' => 'required',
            'contact' => 'required',
            'email' => 'required|unique:admins',
            'username' => 'required|unique:admins',
            'password' => 'required|min:5|max:30',
        ]);

//        $insertAdmin = Admin::create([
//            'id_number' => $request->input('is_number'),
//            'first_name' => $request->input('first_name'),
//            'middle_name' => $request->input('middle_name'),
//            'last_name' => $request->input('last_name'),
//            'gender' => $request->input('gender'),
//            'age' => $request->input('age'),
//            'email' => $request->input('email'),
//            'contact' => $request->input('contact'),
//            'department' => $request->input('department'),
//            'designation' => $request->input('designation'),
//            'username' => $request->input('username'),
//            'status' => $request->input('status'),
//            'password' => Hash::make($request->input('password')),
//        ]);
        $insertAdmin = Admin::create([
            'name' => $request->input('name'),
            'contact' => $request->input('contact'),
            'email' => $request->input('email'),
            'username' => $request->input('username'),
            'password' => Hash::make($request->input('password')),
            'admin_status' => $request->input('admin_status'),
            'admin_category' => $request->input('admin_category'),
        ]);

        if ($insertAdmin) {
            return redirect()->route('admin.users.index')->with('success', 'Success! You added a new Admin');
        } else {
            return redirect()->route('admin.users.create')->with('fail', 'Something went wrong, please try again');
        }
    }

    public function edit(Admin $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, Admin $user)
    {
        $request->validate([
            'name' => 'required',
            'contact' => 'required',
            'email' => 'required',
            'username' => 'required',
        ]);

        $updatedAdminCredentials = $user->update($request->all());

        if ($updatedAdminCredentials) {
            return redirect()->route('admin.users.index')->with('success', 'Success! You updated Admin credentials');
        } else {
            return redirect()->route('admin.users.edit')->with('fail', 'Error! something went wrong, try again');
        }
    }

    public function destroy(Admin $user)
    {
        $user->delete();

        return redirect()->route('admin.users.index')->with('delete', 'Admin deleted!');
    }
}
