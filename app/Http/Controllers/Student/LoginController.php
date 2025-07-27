<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentList;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index()
    {
        return view('Student.login');
    }

    public function authenticate(Request $request)
    {
        // Validate input fields
        $request->validate([
            'enrollment' => 'required|exists:student_list,enrollment',
            'temp_password' => 'required',
        ], [
            'enrollment.required' => 'The enrollment number is required.',
            'enrollment.exists' => 'The enrollment number does not exist.',
            'temp_password.required' => 'The temporary password is required.',
        ]);

        // Check student details
        $student = StudentList::where('enrollment', $request->enrollment)
            ->where('temp_password', $request->temp_password)
            ->first();

            if ($student) {
                Session::put('login', true);
                Session::put('studentlist_id', $student->studentlist_id);
                Session::put('full_name', $student->full_name);
                Session::put('email', $student->email);
                Session::put('enrollment', $student->enrollment);

                return redirect()->route('home')->with('success', 'Login successful!');
            }


        // If invalid credentials
        return back()->with('error', 'Invalid credentials. Please try again.');
    }

    public function logout(Request $request)
    {
        // Clear all session data
        Session::flush();

        return redirect()->route('login')->with('success', 'Logged out successfully.');
    }
}
