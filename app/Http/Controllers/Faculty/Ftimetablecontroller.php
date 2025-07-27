<?php

namespace App\Http\Controllers\Faculty;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Timetable;

class Ftimetablecontroller extends Controller
{
    public function index(Request $request)
    {
        $departments = Department::all();
        $timetables = collect(); // Empty collection by default
        $formSubmitted = false;

        // Check if any filter is submitted
        if ($request->hasAny(['date', 'department', 'semester', 'division'])) {
            $formSubmitted = true;

            $query = Timetable::with(['subject', 'faculty', 'department']);

            if ($request->filled('date')) {
                $query->whereDate('date', $request->date);
            }

            if ($request->filled('department')) {
                $query->where('department_id', $request->department);
            }

            if ($request->filled('semester')) {
                $query->where('semester', $request->semester);
            }

            if ($request->filled('division')) {
                $query->where('division', $request->division);
            }

            $timetables = $query->orderBy('date', 'asc')->get();
        }

        return view('Faculty.time-table', compact('departments', 'timetables', 'formSubmitted'));
    }
}
