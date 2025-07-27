<?php

namespace App\Http\Controllers\Faculty;

use App\Http\Controllers\Controller;
use App\Models\Faculty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class Flogincontroller extends Controller
{
    // Show login form
    public function index()
    {
        return view('Faculty.login');
    }

    // Handle login attempt
    public function authenticate(Request $request)
    {
        // Validate input fields
        $request->validate([
            'faculty_code' => 'required|exists:faculty,faculty_code',
            'faculty_password' => 'required',
        ], [
            'faculty_code.required' => 'Faculty code is required.',
            'faculty_code.exists' => 'Faculty code does not exist.',
            'faculty_password.required' => 'Password is required.',
        ]);

        // Check credentials
        $faculty = Faculty::where('faculty_code', $request->faculty_code)
            ->where('faculty_password', $request->faculty_password)
            ->first();

        if ($faculty) {
            // Store session data
            Session::put('flogin', true);
            Session::put('faculty_id', $faculty->faculty_id);
            Session::put('full_name', $faculty->full_name);
            Session::put('email', $faculty->email);
            Session::put('faculty_code', $faculty->faculty_code);

            return redirect()->route('faculty.home')->with('success', 'Login successful!');
        }

        // Invalid credentials
        return redirect()->back()->withInput()->withErrors([
            'faculty_code' => 'Invalid credentials. Please check your code and password.',
        ]);
    }

    // Logout
    public function logout()
    {
        Session::flush();
        return redirect()->route('login')->with('success', 'Logged out successfully.');
    }
}
