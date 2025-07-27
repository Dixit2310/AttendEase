<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Timetable;
use App\Models\Studentlist;
use App\Models\Faculty;
use App\Models\Subject;
use Illuminate\Support\Facades\Session;

class FacultiesController extends Controller
{
    public function index(Request $request)
    {
        // Get the logged-in student ID from session
        $studentId = Session::get('studentlist_id');

        // Fetch student details with department
        $student = Studentlist::with('department')->find($studentId);

        if (!$student) {
            return redirect()->route('login')->with('error', 'Student not found.');
        }

        // Fetch subjects related to the student's department
        $subjects = Subject::where('department_id', $student->department_id)->get();

        // Fetch faculty details based on timetable data (if needed)
        $facultyIds = Timetable::where('department_id', $student->department_id)
            ->where('semester', $student->semester)
            ->pluck('faculty_id')
            ->unique();

        $faculties = Faculty::whereIn('faculty_id', $facultyIds)->get();

        // Pass subjects to the view
        return view('Student.faculties', compact('subjects', 'student', 'faculties'));
    }

}
