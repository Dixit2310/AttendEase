<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Timetable;
use App\Models\Studentlist;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

class TimetableController extends Controller
{
    public function showTimetable(Request $request)
    {
        if (!Session::has('login') || !Session::has('studentlist_id')) {
            return redirect()->route('login')->with('error', 'Please login to view your timetable.');
        }

        date_default_timezone_set('Asia/Kolkata');

        // Use selected date if available, otherwise use today's date
        $selectedDate = $request->input('date') ?? now()->toDateString();

        $student = Studentlist::find(Session::get('studentlist_id'));

        if (!$student) {
            return redirect()->route('login')->with('error', 'Student not found.');
        }

        $timetables = Timetable::with(['subject', 'faculty', 'department'])
            ->where('department_id', $student->department_id)
            ->where('semester', $student->semester)
            ->where('division', $student->division)
            ->whereDate('date', $selectedDate)
            ->orderBy('starttime')
            ->get();

        return view('Student.time-table', compact('timetables'));
    }

}
