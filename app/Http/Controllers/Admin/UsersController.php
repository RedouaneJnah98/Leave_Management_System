<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UsersController extends Controller
{

    public function index(Admin $user)
    {
        // we use Route Model Binding to retrieve all the data from DB
        $admins = $user->paginate();

        return view('admin.users.index', compact('admins'));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'contact' => 'required',
            'email' => 'required|unique:admins,email',
            'username' => 'required|unique:admins,username',
            'password' => 'required|min:5|max:30',
        ]);

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
        $attributes = $request->validate([
            'name' => 'required',
            'contact' => 'required|numeric',
            'email' => ['required', 'email', Rule::unique('admins', 'email')->ignore($user->id)],
            'username' => ['required', Rule::unique('admins', 'username')->ignore($user->id)],
            'admin_category' => 'required',
            'admin_status' => 'required'
        ]);

//        dd($attributes);
        $updatedAdminCredentials = $user->update($attributes);

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
