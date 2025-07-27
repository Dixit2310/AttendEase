<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Studentlist;
use App\Models\Subject;
use Illuminate\Support\Facades\Session;

class IndexController extends Controller
{
    public function index()
    {
        $studentlist_id = Session::get('studentlist_id');

        $student = Studentlist::with('department')->where('studentlist_id', $studentlist_id)->first();

        // Assuming you have `department_id` and `semester` fields in the subjects table
        $subjects = Subject::where('department_id', $student->department_id)
            ->where('semester', $student->semester)
            ->get();

        return view('Student.index', compact('subjects', 'student'));
    }
}
