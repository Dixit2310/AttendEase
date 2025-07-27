<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentList;
use Illuminate\Support\Facades\Session;

class AccountController extends Controller
{
    /**
     * Display the student's account details.
     */
    public function viewAccount($id)
    {
        // Fetch student details from the database
        $student = StudentList::findOrFail($id);

        // Return the account view with student data
        return view('student.account', compact('student'));
    }

    /**
     * Update the student's account details.
     */
    public function updateAccount(Request $request)
    {
        // Validate the form input
        $request->validate([
            'full_name'   => 'required|string|max:255',
            'email'       => 'required|email|max:255',
            'phone'       => 'required|string|max:15',
            'gender'      => 'required|string|in:Male,Female,Other',
            'dob'         => 'required|date',
            'department'  => 'required|string|max:255',
            'semester'    => 'required|integer|min:1|max:8',
            'division'    => 'required|string|max:10',
        ]);

        // Find the student by session ID
        $student = StudentList::findOrFail(Session::get('studentlist_id'));

        // Update the student details
        $student->update([
            'full_name'  => $request->full_name,
            'email'      => $request->email,
            'phone'      => $request->phone,
            'gender'     => $request->gender,
            'dob'        => $request->dob,
            'department' => $request->department,
            'semester'   => $request->semester,
            'division'   => $request->division,
        ]);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Account details updated successfully.');
    }
}
