<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Studentlist;
use App\Models\Subject;
use Illuminate\Support\Facades\Session;

class AboutController extends Controller
{
    public function index()
    {
        $studentId = Session::get('studentlist_id');

        $student = Studentlist::with('department')->where('studentlist_id', $studentId)->first();

        $subjects = [];

        if ($student) {
            $departmentId = $student->department_id;
            $semester = $student->semester;

            $subjects = Subject::where('department_id', $departmentId)
                ->where('semester', $semester)
                ->get();
        }

        return view('Student.about', compact('subjects'));
    }
}

