<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subject;
use App\Models\Department;

class SubjectController extends Controller
{
    public function index()
    {
        $subjects = Subject::with('department')->get();
        return view('Admin.Subject.subjectlist', compact('subjects'));
    }

    public function edit($id)
    {
        $subject = Subject::findOrFail($id);
        $departments = Department::all();
        return view("Admin.Subject.edit", compact('subject', 'departments'));
    }

    public function update(Request $request, $id)
    {
        // Validate request data
        $request->validate([
            'subject_name' => 'required|string|max:255',
            'department_id' => 'required|exists:departments,department_id',
            'semester' => 'required|integer|min:1|max:8',
        ]);

        // Fetch the subject
        $subject = Subject::findOrFail($id);

        // Update subject data
        $subject->update([
            'subject_name' => $request->subject_name,
            'department_id' => $request->department_id,
            'semester' => $request->semester,
        ]);

        // Redirect with success message
        return redirect()->route('subjectlist')->with('success', 'Subject updated successfully!');
    }

    public function view($id)
    {
        $subject = Subject::with('department')->findOrFail($id);
        return view("Admin.Subject.profile", compact('subject'));
    }

    public function add()
    {
        $departments = Department::all();
        return view("Admin.Subject.add", compact('departments'));
    }

    public function store(Request $request)
    {
        // Validate request data
        $request->validate([
            'subject_name' => 'required|string|max:255',
            'department_id' => 'required|exists:departments,department_id',
            'semester' => 'required|integer|min:1|max:8',
        ]);

        // Store the subject data
        Subject::create([
            'subject_name' => $request->subject_name,
            'department_id' => $request->department_id,
            'semester' => $request->semester,
        ]);

        // Redirect to subject list page
        return redirect()->route('subjectlist')->with('success', 'Subject added successfully!');
    }

    public function destroy($id)
    {
        // Find subject using the correct primary key
        $subject = Subject::findOrFail($id);

        // Delete the subject
        $subject->delete();

        return redirect()->back()->with('success', 'Subject deleted successfully.');
    }
}
