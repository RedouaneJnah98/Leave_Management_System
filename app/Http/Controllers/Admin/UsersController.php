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
        $this->authorize('add_admin');

        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'name' => 'required',
            'contact' => 'required',
            'email' => 'required|unique:admins,email',
            'username' => 'required|unique:admins,username',
            'password' => 'required|min:5|max:30',
            'admin_status' => 'required',
            'admin_category' => 'required',
        ]);

        // hash password
        $attributes['password'] = Hash::make($attributes['password']);

        $insertAdmin = Admin::create($attributes);

        if ($insertAdmin) {
            return redirect()->route('admin.users.index')->with('success', 'Success! You added a new Admin');
        } else {
            return redirect()->route('admin.users.create')->with('fail', 'Something went wrong, please try again');
        }
    }

    public function edit(Admin $user)
    {
        $this->authorize('edit_admin');

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

        $updatedAdminCredentials = $user->update($attributes);

        if ($updatedAdminCredentials) {
            return redirect()->route('admin.users.index')->with('success', 'Success! You updated Admin credentials');
        } else {
            return redirect()->route('admin.users.edit')->with('fail', 'Error! something went wrong, try again');
        }
    }

    public function destroy(Admin $user)
    {
        $this->authorize('delete_admin');
        $user->delete();

        return redirect()->route('admin.users.index')->with('delete', 'Admin deleted!');
    }
}
