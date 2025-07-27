<?php

namespace App\Http\Controllers\Faculty;

use App\Http\Controllers\Controller;
use App\Models\Faculty;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendOTP;

class Fverifycontroller extends Controller
{
    public function index()
    {
        return view('Faculty.register');
    }

    public function verifyEnrollment(Request $request)
    {
        $request->validate([
            'faculty_code' => 'required|string|exists:faculty,faculty_code',
        ]);

        // Fetch faculty details
        $faculty = Faculty::where('faculty_code', $request->faculty_code)->first();

        if (!$faculty) {
            return redirect()->back()->withErrors(['faculty_code' => 'Faculty member not found.']);
        }

        return view('Faculty.register', compact('faculty'));
    }

    public function sendOTP(Request $request)
    {
        $request->validate([
            'faculty_code' => 'required|exists:faculty,faculty_code',
        ]);

        $faculty = Faculty::where('faculty_code', $request->faculty_code)->first();

        if ($faculty) {
            // Generate 6-character alphanumeric OTP
            $otp = Str::upper(Str::random(6));

            // Save OTP in the `faculty_password` field
            $faculty->faculty_password = $otp;
            $faculty->save();

            // Send OTP email
            Mail::to($faculty->email)->send(new SendOTP($faculty->full_name, $otp));

            return redirect()->route('faculty.login')->with('success', 'OTP has been sent to your email. Please log in.');
        }

        return redirect()->back()->with('error', 'Faculty not found.');
    }
}
