<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="AttendEase" />
    <meta name="keywords"
        content="theme_ocean, college, course, e-learning, education, high school, kids, learning, online, online courses, school, student, teacher, tutor, university" />
    <meta name="author" content="theme_ocean" />
    <!-- SITE TITLE -->
    <title>AttendEase-Faculty</title>
    <!-- Latest Bootstrap min CSS -->
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}" />
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet" />
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/fonts/themify-icons.css') }}" />
    <!--- owl carousel Css-->
    <link rel="stylesheet" href="{{ asset('assets/owlcarousel/css/owl.carousel.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/owlcarousel/css/owl.theme.css') }}" />
    <!--slicknav Css-->
    <link rel="stylesheet" href="{{ asset('assets/css/slicknav.css') }}" />
    <!-- MAGNIFIC CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}" />
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}" />
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!-- START PRELOADER -->
    <div class="preloaders">
        <span class="loader"></span>
    </div>
    <!-- END PRELOADER -->

    <!-- START NAVBAR -->
    <div id="navigation" class="fixed-top navbar-light bg-faded site-navigation">
        <div class="container top_menu_bg">
            <div class="row">
                <div class="col-lg-2 col-md-3 col-sm-4">
                    <div class="site-logo">
                        <a href="{{ url('faculty.home') }}">
                            <img src="{{ asset('assets/images/all-img/New4.png') }}" alt=""
                                style="width: 200px; height: auto" />
                        </a>
                    </div>
                </div>
                <!--- END Col -->

                <div class="col-lg-6 col-md-9 col-sm-8">
                    <div class="header_right">
                        <nav id="main-menu" class="ms-auto">
                            <ul>
                                <li><a class="nav-link" href="{{ url('faculty.home') }}">Home</a></li>
                                <li><a class="nav-link" href="{{ url('faculty.about') }}">About Us</a></li>
                                <li>
                                    <a class="nav-link" href="{{ url('faculty.timetable') }}"> Time-Table </a>
                                </li>

                                <li><a class="nav-link" href="{{ url('faculty.contact') }}">Contact</a></li>
                            </ul>
                        </nav>
                        <div id="mobile_menu"></div>
                    </div>
                </div>
                <!--- END Col -->
                <div class="col-lg-4 col-md-3 col-sm-8 m-none">
                    <div class="call_to_action d-flex justify-content-between align-items-center" style="gap: 10px;">
                        <a class="btn_two" href="{{ url('attendance.verify') }}">Attendance</a>

                        @if (session()->has('flogin') && session()->has('faculty_id'))
                            <a class="btn_two" href="">
                                {{ session('full_name') }}
                            </a>
                        @else
                            <a class="btn_two" href="{{ route('faculty.login') }}">Login/Register</a>
                        @endif
                    </div>
                </div>

                <!--- END SOCIAL PROFILE -->
            </div>
            <!--- END Col -->
        </div>
        <!--- END ROW -->
    </div>
    <!-- END NAVBAR -->

    <!-- START SECTION TOP -->
    <section class="section-top">
        <div class="container">
            <div class="col-lg-10 offset-lg-1 text-center">
                <div class="section-top-title wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s"
                    data-wow-offset="0">
                    <h1>Attendance</h1>
                    <ul>
                        <li><a href="{{ url('faculty.home') }}">Home</a></li>
                        <li>/ Attendance</li>
                    </ul>
                </div>
                <!-- //.HERO-TEXT -->
            </div>
            <!--- END COL -->
        </div>
        <!--- END CONTAINER -->
    </section><br>
    <!-- END SECTION TOP -->

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

     <style>
        .containerr {
            max-width: 1100px;
            margin: auto;
            background: #fff;
            border-radius: 15px;
            padding: 35px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            animation: fadeIn 0.6s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
            font-size: 30px;
            font-weight: 600;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            overflow: hidden;
            background-color: white;
            border-radius: 12px;
        }

        th,
        td {
            padding: 16px 18px;
            text-align: center;
            border-bottom: 1px solid #eaeaea;
            font-size: 15px;
        }

        th {
            background: #007bff;
            color: white;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        tr:last-child td {
            border-bottom: none;
        }

        tr:hover {
            background-color: #f1f5fb;
        }

        .btn {
            padding: 12px 20px;
            /* increased vertical and horizontal padding */
            font-size: 15px;
            /* slightly larger font */
            border-radius: 25px;
            font-weight: 600;
            border: none;
            cursor: pointer;
            transition: 0.3s ease;
            min-width: 80px;
        }

        .btn-present {
            background-color: #28a745;
            color: white;
        }

        .btn-present:hover {
            background-color: #218838;
            color: white;
        }

        .btn-absent {
            background-color: #dc3545;
            color: white;
        }

        .btn-absent:hover {
            background-color: #c82333;
            color: white;
        }

        .btn.selected {
            outline: 3px solid #111;
            transform: scale(1.05);
        }

        .action-cell {
            display: flex;
            justify-content: center;
            gap: 12px;
        }

        @media (max-width: 768px) {
            .action-cell {
                flex-direction: column;
                align-items: center;
            }

            th,
            td {
                font-size: 14px;
                padding: 10px;
            }

            .btn {
                width: 100%;
            }
        }

        .no-data {
            text-align: center;
            color: #888;
            font-size: 18px;
            margin-top: 20px;
        }

        .submit-btn {
            display: block;
            width: 200px;
            /* reduced width */
            margin: 30px auto 0;
            /* centers it horizontally */
            padding: 12px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            font-size: 16px;
            font-weight: 600;
            border-radius: 25px;
            cursor: pointer;
            transition: 0.3s ease;
            text-align: center;
        }

        .submit-btn:hover {
            background-color: #0056b3;
        }

        .inline-form .form-group,
        .inline-form .col-md-3 {
            margin-right: 15px;
            flex: 1;
            min-width: 180px;
        }

        .inline-form {
            display: flex;
            flex-wrap: wrap;
            align-items: flex-end;
            gap: 15px;
        }

        .inline-form button {
            white-space: nowrap;
        }
    </style>


    <!-- Filter Form -->
    <div class="bg-white py-4 shadow-sm rounded">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <form method="POST" action="{{ route('faculty.fetchStudents') }}"
                        class="row g-3 align-items-end justify-content-center">
                        @csrf

                        <!-- Department Dropdown -->
                        <div class="col-md-3">
                            <label for="department_id" class="form-label fw-semibold">Department</label>
                            <select id="department_id" name="department_id" class="form-select shadow-sm rounded-pill"
                                required>
                                <option value="">Select Department</option>
                                @foreach ($uniqueDepartments as $deptId)
                                    <option value="{{ $deptId }}">
                                        {{ \App\Models\Department::find($deptId)->department_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Semester Dropdown -->
                        <div class="col-md-2">
                            <label for="semester" class="form-label fw-semibold">Semester</label>
                            <select id="semester" name="semester" class="form-select shadow-sm rounded-pill" required>
                                <option value="">Select Semester</option>
                                @foreach ($uniqueSemesters as $semester)
                                    <option value="{{ $semester }}">{{ $semester }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Division Dropdown -->
                        <div class="col-md-2">
                            <label for="division" class="form-label fw-semibold">Division</label>
                            <select id="division" name="division" class="form-select shadow-sm rounded-pill"
                                required>
                                <option value="">Select Division</option>
                                @foreach ($uniqueDivisions as $division)
                                    <option value="{{ $division }}">{{ $division }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Subject Dropdown -->
                        <div class="col-md-3">
                            <label for="subject" class="form-label fw-semibold">Subject</label>
                            <select id="subject" name="subject" class="form-select shadow-sm rounded-pill"
                                required>
                                <option value="">Select Subject</option>
                                @foreach ($uniqueSubjects as $timetable)
                                    <option value="{{ $timetable->subject->subject_name }}">
                                        {{ $timetable->subject->subject_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Submit Button -->
                        <div class="col-md-2 d-flex align-items-end">
                            <button class="btn btn-primary w-100 rounded-pill shadow" type="submit">
                                Submit
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <form method="POST" action="{{ route('faculty.attendance.store') }}">
        @csrf
        <div class="table-responsive">
            <table class="table table-bordered table-striped align-middle">
                <thead class="table-primary text-center">
                    <tr>
                        <th>Sr. No.</th>
                        <th>Enrollment Number</th>
                        <th>Student Name</th>
                        <th>Attendance</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $index => $student)
                        <tr class="text-center">
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $student->enrollment }}</td>
                            <td>{{ $student->full_name }}</td>
                            <td>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio"
                                        name="attendance[{{ $student->studentlist_id }}]"
                                        id="present{{ $student->studentlist_id }}" value="1" required>
                                    <label class="form-check-label"
                                        for="present{{ $student->studentlist_id }}">Present</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio"
                                        name="attendance[{{ $student->studentlist_id }}]"
                                        id="absent{{ $student->studentlist_id }}" value="0">
                                    <label class="form-check-label"
                                        for="absent{{ $student->studentlist_id }}">Absent</label>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary btn-lg rounded-pill mt-4 px-5">
                ✅ Submit Attendance
            </button>
        </div>
    </form>

    <br>

    <style>
        .btn-outline-success.selected {
            background-color: #28a745;
            color: white;
        }

        .btn-outline-danger.selected {
            background-color: #dc3545;
            color: white;
        }

        .containerr {
            background: #f8f9fa;
            border-radius: 12px;
        }

        .table th,
        .table td {
            vertical-align: middle;
        }

        .table th {
            font-weight: 600;
            background-color: #3a85cf;
        }
    </style>


    <script>
        function markAttendance(button, studentId, status) {
            const row = button.closest('tr');
            const input = row.querySelector(`input[name="attendance[${studentId}]"]`);
            input.value = status;

            // Highlight button selection
            row.querySelectorAll('button').forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');
        }
    </script>


    <!-- START FOOTER -->
    <div class="footer section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="single_footer">
                        <a href="{{ url('faculty.home') }}"><img
                                src="{{ asset('assets/images/all-img/footer logo1.png') }}" alt="" /></a>
                        <p>
                            The AttendEasy boosts efficiency by automating record-keeping
                            and reducing human error. It provides real-time data, enabling
                            better decision-making and resource allocation.
                        </p>
                    </div>
                </div>
                <!--- END COL -->
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="single_footer">
                        <h4><u>Subjects</u></h4>
                        <ul>
                            <li><a href="#">Machine Learning</a></li>
                            <li><a href="#">Data Mining</a></li>
                            <li><a href="#">IOT (Internet of Things)</a></li>
                            <li><a href="#">Java</a></li>
                            <li><a href="#">Flutter</a></li>
                            <li><a href="#">PHP</a></li>
                        </ul>
                    </div>
                </div>
                <!--- END COL -->
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="single_footer">
                        <h4><u>Features</u></h4>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Faculties</a></li>
                            <li><a href="#">Time - Table</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Report</a></li>
                        </ul>
                    </div>
                </div>
                <!--- END COL -->
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="single_footer">
                        <h4><u>Contact Info</u></h4>
                        <div class="sf_contact">
                            <span class="ti-mobile"></span>
                            <h3>Phone number</h3>
                            <p>+91 90545 49145</p>
                        </div>
                        <div class="sf_contact">
                            <span class="ti-email"></span>
                            <h3>Email Address</h3>
                            <p>makdx2310@gmail.com</p>
                        </div>
                        <div class="sf_contact">
                            <span class="ti-map"></span>
                            <h3>Address</h3>
                            <p>Ahmedabad</p>
                        </div>
                    </div>
                </div>
                <!--- END COL -->
            </div>
            <!--- END ROW -->
            <div class="row fc">
                <div class="col-lg-6 col-sm-6 col-xs-12">
                    <div class="footer_copyright">
                        <p>&copy; 2025. All Rights Reserved.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-xs-12">
                    <div class="footer_menu">
                        <ul>
                            <li><a href="#">Terms of use</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Cookie Policy</a></li>
                        </ul>
                    </div>
                </div>
                <!-- END COL -->
            </div>
        </div>
        <!--- END CONTAINER -->
    </div>
    <!-- END FOOTER -->

    <!-- Latest jQuery -->
    <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('assets/js/jquery-1.12.4.min.js') }}"></script>
    <!-- Latest compiled and minified Bootstrap -->
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- owl-carousel min js  -->
    <script src="{{ asset('assets/owlcarousel/js/owl.carousel.min.js') }}"></script>
    <!-- jquery.slicknav -->
    <script src="{{ asset('assets/js/jquery.slicknav.js') }}"></script>
    <!-- magnific-popup js -->
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- scrolltopcontrol js -->
    <script src="{{ asset('assets/js/scrolltopcontrol.js') }}"></script>
    <!-- jquery purecounter vanilla js -->
    <script src="{{ asset('assets/js/purecounter_vanilla.js') }}"></script>
    <!-- WOW - Reveal Animations When You Scroll -->
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <!-- scripts js -->
    <script src="{{ asset('assets/js/scripts.js') }}"></script>

</body>

</html>
