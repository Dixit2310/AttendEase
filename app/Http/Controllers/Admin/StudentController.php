<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentList;
use App\Models\Department;

class StudentController extends Controller
{
    public function index()
    {
        $students = StudentList::all();
        return view('Admin.studentlist', compact('students'));
    }

    public function edit($id)
    {
        $student = StudentList::findOrFail($id);
        $departments = Department::all();
        return view('Admin.edit', compact('student', 'departments'));
    }

    public function update(Request $request, $id)
    {
        // Validate request data
        $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|unique:student_list,email,' . $id . ',studentlist_id',
            'enrollment' => 'required|string|unique:student_list,enrollment,' . $id . ',studentlist_id',
            'phone' => 'required|string|unique:student_list,phone,' . $id . ',studentlist_id|min:10|max:10',
            'temp_password' => 'nullable|string',
            'password' => 'nullable|string',
            'gender' => 'required|in:male,female,other',
            'dob' => 'required|date',
            'department_id' => 'required|integer|exists:departments,department_id',
            'semester' => 'required|integer|min:1|max:8',
            'division' => 'required|string',
        ]);

        // Fetch the student
        $student = StudentList::findOrFail($id);

        // Update student data
        $student->update([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'enrollment' => $request->enrollment,
            'phone' => $request->phone,
            'temp_password' => $request->temp_password,
            'password' => $request->password ? bcrypt($request->password) : $student->password,
            'gender' => $request->gender,
            'dob' => $request->dob,
            'department_id' => $request->department_id, // ✅ fixed
            'semester' => $request->semester,
            'division' => $request->division,
        ]);

        // Redirect with success message
        return redirect()->route('studentlist')->with('success', 'Student updated successfully!');
    }



    public function view($id)
    {
        $student = StudentList::findOrFail($id);
        return view("Admin.profile", compact('student'));
    }


    public function add()
    {
        $departments = Department::all();
        return view('Admin.add', compact('departments'));
    }

    public function store(Request $request){
        $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|unique:student_list,email',
            'enrollment' => 'required|string|unique:student_list,enrollment',
            'phone' => 'required|string|unique:student_list,phone|min:10|max:10',
            'temp_password' => 'nullable|string',
            'password' => 'nullable|string',
            'gender' => 'required|in:male,female,other',
            'dob' => 'required|date',
            'department_id' => 'required|integer|exists:departments,department_id',
            'semester' => 'required|integer|min:1|max:8',
            'division' => 'required|string',
        ]);

        StudentList::create([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'enrollment' => $request->enrollment,
            'phone' => $request->phone,
            'temp_password' => $request->temp_password,
            'password' => bcrypt($request->password),
            'gender' => $request->gender,
            'dob' => $request->dob,
            'department_id' => $request->department_id, // ✅ Correct key
            'semester' => $request->semester,
            'division' => $request->division,
        ]);

        return redirect()->route('studentlist')->with('success', 'Student added successfully!');
    }


    public function destroy($id)
    {
        // Find student using the correct primary key
        $student = StudentList::where('studentlist_id', $id)->first();

        if (!$student) {
            return redirect()->back()->with('error', 'Student not found.');
        }

        // Delete the student
        $student->delete();

        return redirect()->back()->with('success', 'Student deleted successfully.');
    }

}
