<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Designation;
use Illuminate\Http\Request;

class DesignationController extends Controller
{
    public function index(Designation $designation)
    {
        $designations = $designation->all();

        return view('admin.designation.index', compact('designations'));
    }

    public function create()
    {
        return view('admin.designation.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'designation_name' => 'required|unique:designations',
            'designation_description' => 'required|unique:designations',
        ]);

        $insertDesignation = Designation::create($request->all());

        if ($insertDesignation) {
            return redirect()->route('admin.designation.index')->with('success', "Success! You've added a new Designation");
        } else {
            return redirect()->route('admin.designation.create')->with('fail', 'Error! Something went wrong, try again');
        }
    }

    public function edit(Designation $designation)
    {
        return view('admin.designation.edit', compact('designation'));
    }

    public function update(Request $request, Designation $designation)
    {
        $request->validate([
            'designation_name' => 'required|unique:designations',
            'designation_description' => 'required|unique:designations',
        ]);

        $updateDesignation = $designation->update($request->all());

        if ($updateDesignation) {
            return redirect()->route('admin.designation.index')->with('success', "Success! You've changed the Designation");
        } else {
            return redirect()->route('admin.designation.edit')->with('fail', 'Error! Something went wrong, try again');
        }
    }

    public function destroy(Designation $designation)
    {
        $designation->delete();

        return redirect()->route('admin.designation.index')->with('delete', "Designation deleted!");
    }
}
