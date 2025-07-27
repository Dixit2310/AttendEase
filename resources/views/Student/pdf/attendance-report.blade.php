<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Report</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 1px solid #e0e0e0;
        }
        h2 {
            color: #2c3e50;
            margin-bottom: 10px;
        }
        .student-info {
            background-color: #fff;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            margin-bottom: 20px;
        }
        .student-info p {
            margin: 5px 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            background-color: #fff;
            border-radius: 5px;
            overflow: hidden;
        }
        th, td {
            padding: 12px 15px;
            text-align: center;
            border: 1px solid #e0e0e0;
        }
        th {
            background-color: #3498db;
            color: white;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.85em;
            letter-spacing: 0.5px;
        }
        tr:nth-child(even) {
            background-color: #f8f9fa;
        }
        tr:hover {
            background-color: #f1f7fd;
        }
        .status-present {
            color: #27ae60;
            font-weight: 600;
        }
        .status-absent {
            color: #e74c3c;
            font-weight: 600;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #e0e0e0;
            color: #7f8c8d;
            font-size: 0.9em;
        }
    </style>
</head>
<body>
    <div class="header">
        <h2>Attendance Report</h2>
    </div>

    <div class="student-info">
        <p><strong>Student Name:</strong> {{ $student->full_name }}</p>
        <p><strong>Enrollment Number:</strong> {{ $student->enrollment }}</p>
        <p><strong>Department:</strong> {{ $student->department->department_name ?? 'N/A' }}</p>
    </div>

    <table>
        <thead>
            <tr>
                <th>Sr. No.</th>
                <th>Date</th>
                <th>Subject</th>
                <th>Faculty</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($attendanceData as $index => $entry)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ \Carbon\Carbon::parse($entry['date'])->format('d-m-Y') }}</td>
                    <td>{{ $entry['subject_name'] }}</td>
                    <td>{{ $entry['faculty'] }}</td>
                    <td class="status-{{ strtolower($entry['status']) }}">{{ $entry['status'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
