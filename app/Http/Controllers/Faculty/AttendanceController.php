<?php
namespace App\Http\Controllers\Faculty;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Studentlist;
use App\Models\Attendance;
use App\Models\Timetable;
use Illuminate\Support\Facades\Session;

class AttendanceController extends Controller
{
    public function index()
    {
        $faculty_id = Session::get('faculty_id');
        $departments = Department::all();
        $students = [];

        // Fetch timetables for this faculty with subject relation
        $timetables = Timetable::where('faculty_id', $faculty_id)->with('subject')->get();

        // Prepare unique dropdown data
        $uniqueDepartments = $timetables->unique('department_id')->pluck('department_id');
        $uniqueSemesters = $timetables->unique('semester')->pluck('semester');
        $uniqueDivisions = $timetables->unique('division')->pluck('division');
        $uniqueSubjects = $timetables->unique('subject_id');

        return view('Faculty.attendance', compact('departments', 'students', 'uniqueDepartments', 'uniqueSemesters', 'uniqueDivisions', 'uniqueSubjects'));
    }

    public function fetchStudents(Request $request)
{
    $faculty_id = Session::get('faculty_id');
    $departments = Department::all();

    $request->validate([
        'department_id' => 'required|exists:departments,department_id',
        'semester' => 'required',
        'division' => 'required',
        'subject' => 'required|string',
    ]);

    // Fetch students based on the selected filters
    $students = Studentlist::where('department_id', $request->department_id)
        ->where('semester', $request->semester)
        ->where('division', $request->division)
        ->orderBy('enrollment', 'asc')
        ->get();

    // Store the selected subject in the session
    Session::put('selected_subject', $request->subject);

    // Prepare unique dropdown data again for the next page load
    $timetables = Timetable::where('faculty_id', $faculty_id)->with('subject')->get();
    $uniqueDepartments = $timetables->unique('department_id')->pluck('department_id');
    $uniqueSemesters = $timetables->unique('semester')->pluck('semester');
    $uniqueDivisions = $timetables->unique('division')->pluck('division');
    $uniqueSubjects = $timetables->unique('subject_id');

    return view('Faculty.attendance', compact('departments', 'students', 'uniqueDepartments', 'uniqueSemesters', 'uniqueDivisions', 'uniqueSubjects'));
}


    public function store(Request $request)
{
    // Validate the attendance data
    $request->validate([
        'attendance' => 'required|array', // Ensure attendance data is passed correctly
        'attendance.*' => 'required|in:0,1', // Ensure each attendance status is either 0 (absent) or 1 (present)
    ]);

    // Get the faculty ID from the session
    $faculty_id = Session::get('faculty_id');

    // Get today's date
    $date = now()->toDateString();

    // Loop through the attendance data and create records
    foreach ($request->attendance as $studentlist_id => $status) {
        Attendance::create([
            'studentlist_id' => $studentlist_id,
            'faculty_id' => $faculty_id,
            'subject_name' => Session::get('selected_subject'), // Get the subject from the session
            'date' => $date,
            'status' => $status, // 1 for Present, 0 for Absent
        ]);
    }

    // Redirect back to the attendance page with a success message
    return redirect()->route('attendance.verify')->with('success', 'Attendance successfully recorded.');
}

}
