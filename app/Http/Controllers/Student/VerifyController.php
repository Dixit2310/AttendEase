<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\StudentList;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendOTP;

class VerifyController extends Controller
{
    public function index()
    {
        return view('Student.register');
    }

    public function verifyEnrollment(Request $request)
    {
        $request->validate([
            'Enrollment' => 'required|exists:student_list,enrollment',
        ], [
            'Enrollment.required' => 'Enrollment number is required.',
            'Enrollment.exists' => 'Invalid enrollment number. Please check and try again.',
        ]);

        // Fetch student details based on enrollment number
        $student = StudentList::where('enrollment', $request->Enrollment)->first();

        return view('Student.register', compact('student'));
    }

    public function sendOTP(Request $request)
    {
        $request->validate([
            'enrollment' => 'required|exists:student_list,enrollment',
        ]);

        $student = StudentList::where('enrollment', $request->enrollment)->first();

        if ($student) {
            // Generate 6-character alphanumeric OTP
            $otp = Str::upper(Str::random(6));

            // Save OTP in the database
            $student->temp_password = $otp;
            $student->save();

            // Send OTP email
            Mail::to($student->email)->send(new SendOTP($student->full_name, $otp));

            return redirect()->route('login')->with('success', 'OTP has been sent to your email. Please log in.');
        }

        return redirect()->back()->with('error', 'Student not found.');
    }
}
