<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Attendance;
use App\Models\Studentlist;
use Illuminate\Support\Facades\Session;
use PDF;

class ReportController extends Controller
{
    public function index(Request $request)
    {
        // Your existing code to fetch attendance data
        $studentlist_id = Session::get('studentlist_id');
        $startDate = $request->input('start_date') ?? now()->toDateString();
        $endDate = $request->input('end_date') ?? now()->toDateString();

        $allAttendances = Attendance::with(['faculty'])
            ->where('studentlist_id', $studentlist_id)
            ->whereBetween('date', [$startDate, $endDate])
            ->get();

        $attendanceStats = [];

        foreach ($allAttendances as $record) {
            $attendanceStats[] = [
                'date' => $record->date,
                'subject_name' => $record->subject_name ?? 'N/A',
                'faculty' => $record->faculty->full_name ?? 'N/A',
                'total_lectures' => 1,
                'present' => $record->status == 1 ? 1 : 0,
                'absent' => $record->status == 0 ? 1 : 0,
                'percentage' => 100 * ($record->status == 1 ? 1 : 0),
            ];
        }

        $student = Studentlist::where('studentlist_id', $studentlist_id)->first();

        return view('Student.report', compact('attendanceStats', 'student', 'startDate', 'endDate'));
    }

    public function downloadAttendanceReport()
    {
        $studentlist_id = Session::get('studentlist_id');
        $student = Studentlist::with(['department'])->where('studentlist_id', $studentlist_id)->first();

        // Fetch attendance data for the logged-in student
        $attendanceStats = Attendance::with(['faculty'])
            ->where('studentlist_id', $studentlist_id)
            ->get();

        $attendanceData = [];

        foreach ($attendanceStats as $record) {
            $attendanceData[] = [
                'date' => $record->date,
                'subject_name' => $record->subject_name ?? 'N/A',
                'faculty' => $record->faculty->full_name ?? 'N/A',
                'status' => $record->status == 1 ? 'Present' : 'Absent',
            ];
        }

        // Generate PDF using a Blade view
        $pdf = PDF::loadView('Student.pdf.attendance-report', compact('attendanceData', 'student'));

        // Download the PDF file
        return $pdf->download('attendance_report_' . $student->studentlist_id . '.pdf');
    }
}
