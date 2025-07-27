<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Studentlist;
use App\Models\Attendance;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        // Fetch departments from the Department model
        $departments = Department::all();

        // Fetch distinct semesters from the student list
        $semesters = Studentlist::select('semester')->distinct()->get();

        // Fetch distinct divisions from the student list
        $divisions = Studentlist::select('division')->distinct()->get();

        // Initialize counts for students
        $studentsCount = 0;
        $presentCount = 0;
        $absentCount = 0;

        // If the form is submitted, filter students based on selected department, semester, and division
        if ($request->isMethod('post')) {
            // Fetch the date for the attendance records (you can pass this date from the form)
            $date = $request->date;  // Assuming a date input is added to the form

            // Query to count total students based on department, semester, and division
            $studentsCount = Studentlist::where('department_id', $request->department)
                ->where('semester', $request->semester)
                ->where('division', $request->division)
                ->count();

            // Fetch attendance records for the selected date and department, semester, division
            $attendances = Attendance::where('date', $date)
                ->whereIn('studentlist_id', Studentlist::where('department_id', $request->department)
                    ->where('semester', $request->semester)
                    ->where('division', $request->division)
                    ->pluck('studentlist_id'))
                ->get();

            // Count present and absent students based on the attendance status
            $presentCount = $attendances->where('status', 'present')->count();
            $absentCount = $attendances->where('status', 'absent')->count();
        }

        // Return the view with the variables
        return view('Admin.index', compact('departments', 'semesters', 'divisions', 'studentsCount', 'presentCount', 'absentCount'));
    }
}
