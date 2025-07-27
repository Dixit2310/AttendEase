<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    public function index(){
        $departments = Department::all();
        return view('Admin.Department.departmentlist', compact('departments'));
    }

    public function edit($id)
    {
        $department = Department::findOrFail($id); // Fetch student by ID
        return view("Admin.Department.edit", compact('department'));
    }

    public function update(Request $request, $id)
{
    // Validate request data
    $request->validate([
        'department_name' => 'required|string|max:255',
    ]);

    // Fetch the student
    $department = Department::findOrFail($id);

    // Update student data
    $department->update([
        'department_name' => $request->department_name,
    ]);

    // Redirect with success message
    return redirect()->route('departmentlist')->with('success', 'Department updated successfully!');
}


    public function view($id)
    {
        $department = Department::findOrFail($id);
        return view("Admin.Department.profile", compact('department'));
    }


    public function add(){
        return view("Admin.Department.add");
    }

    public function store(Request $request){
        // Validate request data
        $request->validate([
            'department_name' => 'required|string|max:255',
        ]);

        // Store the student data
        Department::create([
            'department_name' => $request->department_name,
        ]);

        // Redirect to student list page
        return redirect()->route('departmentlist')->with('success', 'Department added successfully!');
    }

    public function destroy($id)
    {
        // Find student using the correct primary key
        $department = Department::where('department_id', $id)->first();

        if (!$department) {
            return redirect()->back()->with('error', 'Department not found.');
        }

        // Delete the student
        $department->delete();

        return redirect()->back()->with('success', 'Department deleted successfully.');
    }

}
