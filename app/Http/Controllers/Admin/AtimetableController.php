<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Timetable;
use App\Models\Subject;
use App\Models\Faculty;
use App\Models\Department;

class AtimetableController extends Controller
{
    public function index()
    {
        $timetables = Timetable::with(['subject', 'faculty', 'department'])->get();
        return view('Admin.Time-table.time-tablelist', compact('timetables'));
    }

    public function add()
    {
        $subjects = Subject::all();
        $faculties = Faculty::all();
        $departments = Department::all();

        return view("Admin.Time-table.add", compact('subjects', 'faculties', 'departments'));
    }

    public function edit($id)
    {
        $timetable = Timetable::with(['subject', 'faculty', 'department'])->findOrFail($id);
        $subjects = Subject::all();
        $faculties = Faculty::all();
        $departments = Department::all();

        return view('Admin.Time-table.edit', compact('timetable', 'subjects', 'faculties', 'departments'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'date' => 'required|date',
            'starttime' => 'required',
            'endtime' => 'required',
            'subject_id' => 'required|exists:subjects,subject_id',
            'faculty_id' => 'required|exists:faculty,faculty_id',
            'department_id' => 'required|exists:departments,department_id',
            'division' => 'required|string|max:50',
            'semester' => 'required',
        ]);

        $timetable = Timetable::findOrFail($id);
        $timetable->update($validated);

        return redirect()->route('time-tablelist')->with('success', 'Timetable updated successfully!');
    }

    public function destroy($id)
    {
        $timetable = Timetable::findOrFail($id);
        $timetable->delete();

        return redirect()->back()->with('success', 'Timetable entry deleted successfully!');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'date.*' => 'required|date',
            'starttime.*' => 'required',
            'endtime.*' => 'required',
            'subject_id.*' => 'required|exists:subjects,subject_id',
            'faculty_id.*' => 'required|exists:faculty,faculty_id',
            'department_id' => 'required|exists:departments,department_id',
            'division.*' => 'required|string|max:50',
            'semester' => 'required',
        ]);

        $count = count($request->date);

        for ($i = 0; $i < $count; $i++) {
            Timetable::create([
                'date' => $request->date[$i],
                'starttime' => $request->starttime[$i],
                'endtime' => $request->endtime[$i],
                'subject_id' => $request->subject_id[$i],
                'faculty_id' => $request->faculty_id[$i],
                'department_id' => $request->department_id, // common for all
                'division' => $request->division[$i],
                'semester' => $request->semester[$i],
            ]);
        }

        return redirect()->route('time-tablelist')->with('success', 'Timetable entries added successfully!');
    }

    public function create()
    {
        $subjects = Subject::all();
        $faculties = Faculty::all();
        $departments = Department::all();

        return view('Admin.Time-table.create', compact('subjects', 'faculties', 'departments'));
    }

    public function view($id)
    {
        $timetable = Timetable::with(['subject', 'faculty', 'department'])->findOrFail($id);
        return view('Admin.Time-table.profile', compact('timetable'));
    }
}
