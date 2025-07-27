<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Faculty;
use App\Models\Department;

class FacultyController extends Controller
{
    // Show Faculty List
    public function index()
    {
        $faculties = Faculty::with('department')->get(); // Eager load departments
        return view('Admin.facultylist', compact('faculties'));
    }

    // Show Add Faculty Form
    public function add()
    {
        $departments = Department::all(); // Fetch all departments
        return view("Admin.fadd", compact('departments'));
    }

    // Store Faculty in Database
    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'faculty_code' => 'required|string|max:50|unique:faculty',
            'email' => 'required|email|unique:faculty',
            'phone_number' => 'required|string|max:20',
            'date_of_birth' => 'required|date',
            'gender' => 'required|in:Male,Female,Other',
            'designation' => 'required|string|max:100',
            'department_id' => 'required|exists:departments,department_id',
        ]);

        Faculty::create($request->all());

        return redirect()->route('facultylist')->with('success', 'Faculty added successfully!');
    }

    // Show Edit Faculty Form
    public function edit($id)
    {
        $faculty = Faculty::findOrFail($id);
        $departments = Department::all(); // Load departments for dropdown
        return view("Admin.fedit", compact('faculty', 'departments'));
    }

    // Update Faculty
    public function update(Request $request, $faculty_id)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'faculty_code' => 'required|string|max:50|unique:faculty,faculty_code,' . $faculty_id . ',faculty_id',
            'email' => 'required|email|unique:faculty,email,' . $faculty_id . ',faculty_id',
            'phone_number' => 'required|string|max:20',
            'date_of_birth' => 'required|date',
            'gender' => 'required|in:Male,Female,Other',
            'designation' => 'required|string|max:100',
            'department_id' => 'required|exists:departments,department_id',
        ]);

        $faculty = Faculty::findOrFail($faculty_id);
        $faculty->update($request->all());

        return redirect()->route('facultylist')->with('success', 'Faculty details updated successfully.');
    }

    // Show Faculty Profile
    public function view($id)
    {
        $faculty = Faculty::with('department')->findOrFail($id);
        return view("Admin.fprofile", compact('faculty'));
    }

    // Delete Faculty
    public function delete($id)
    {
        $faculty = Faculty::findOrFail($id);
        $faculty->delete();

        return redirect()->route('facultylist')->with('success', 'Faculty deleted successfully!');
    }
}
