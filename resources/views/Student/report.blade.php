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
    <title>AttendEase</title>
    <!-- Latest Bootstrap min CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet" />
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/fonts/themify-icons.css" />
    <!--- owl carousel Css-->
    <link rel="stylesheet" href="assets/owlcarousel/css/owl.carousel.css" />
    <link rel="stylesheet" href="assets/owlcarousel/css/owl.theme.css" />
    <!--slicknav Css-->
    <link rel="stylesheet" href="assets/css/slicknav.css" />
    <!-- MAGNIFIC CSS -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css" />
    <!-- animate CSS -->
    <link rel="stylesheet" href="assets/css/animate.css" />
    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

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
                        <a href="{{ url('home') }}">
                            <img src="assets/images/all-img/New4.png" alt=""
                                style="width: 200px; height: auto" />
                        </a>
                    </div>
                </div>
                <!--- END Col -->

                <div class="col-lg-6 col-md-9 col-sm-8">
                    <div class="header_right">
                        <nav id="main-menu" class="ms-auto">
                            <ul>
                                <li><a class="nav-link" href="{{ url('home') }}">Home</a></li>
                                <li><a class="nav-link" href="{{ url('about') }}">About Us</a></li>
                                <li><a class="nav-link" href="{{ url('faculties') }}">Faculties </a></li>
                                <li>
                                    <a class="nav-link" href="{{ url('time-table') }}"> Time-Table </a>
                                </li>

                                <li><a class="nav-link" href="{{ url('contact') }}">Contact</a></li>
                            </ul>
                        </nav>
                        <div id="mobile_menu"></div>
                    </div>
                </div>
                <!--- END Col -->
                <div class="col-lg-4 col-md-3 col-sm-8 m-none">
                    <div class="call_to_action" style="display: flex; justify-content: space-between; gap: 15px;">
                        <a class="btn_two" href="{{ route('report') }}">Report</a>

                        @if (session()->has('login') && session()->has('studentlist_id'))
                            @php
                                $student = \App\Models\Studentlist::find(session('studentlist_id'));
                            @endphp
                            <a class="btn_two" href="{{ route('account.view', ['id' => session('studentlist_id')]) }}">
                                {{ $student->full_name ?? 'Student' }}
                            </a>
                        @else
                            <a class="btn_two" href="{{ route('login') }}">Login / Register</a>
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

    <!--   START SECTION TOP -->
    <section class="section-top">
        <div class="container">
            <div class="col-lg-10 offset-lg-1 text-center">
                <div class="section-top-title wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s"
                    data-wow-offset="0">
                    <h1>Attendance Report</h1>
                    <ul>
                        <li><a href="{{ url('home') }}">Home</a></li>
                        <li>/ Report</li>
                    </ul>
                </div>
                <!-- //.HERO-TEXT -->
            </div>
            <!--- END COL -->
        </div>
        <!--- END CONTAINER -->
    </section>
    <!-- END SECTION TOP -->

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-lg border-0 rounded-4">
                    <div class="card-body text-center py-4">
                        <button class="btn btn-primary btn-lg rounded-pill px-4" onclick="toggleFilter()">
                            <i class="fas fa-filter me-2"></i> Filter Attendance
                        </button>

                        <div id="filter-options" class="mt-4 d-none animate__animated animate__fadeIn">
                            <form method="GET" action="{{ route('report') }}">
                                <div class="mb-3">
                                    <select class="form-select text-center fw-bold" name="filter_option"
                                        id="filter-select" onchange="handleFilterChange(this.value)">
                                        <option value="">-- Select Filter --</option>
                                        <option value="today">Today</option>
                                        {{-- <option value="yesterday">Yesterday</option> --}}
                                        <option value="last_7_days">Last 7 Days</option>
                                        <option value="this_month">This Month</option>
                                        {{-- <option value="last_month">Last Month</option> --}}
                                        <option value="custom">Custom Range</option>
                                    </select>
                                </div>

                                <div id="custom-range" class="d-none">
                                    <div class="mb-3">
                                        <label class="form-label fw-semibold">Start Date</label>
                                        <input type="date" name="start_date"
                                            class="form-control text-center shadow-sm">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label fw-semibold">End Date</label>
                                        <input type="date" name="end_date"
                                            class="form-control text-center shadow-sm">
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-success w-100 rounded-pill mt-2">
                                    <i class="fas fa-check-circle me-1"></i> Apply Filter
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <script>
        function toggleFilter() {
            const filterBox = document.getElementById('filter-options');
            filterBox.classList.toggle('d-none');
        }

        function handleFilterChange(value) {
            const customRange = document.getElementById('custom-range');
            customRange.classList.toggle('d-none', value !== 'custom');
        }
    </script>

    <!-- Attendance Table -->
    <div class="section-padding bg-light">
        <div class="container">
            <div class="section-title text-center mb-5">
                <p class="h3 fw-bold text-primary"><span><u>Your Attendance</u></span></p>
            </div>

            <div class="table-responsive">
                <table class="table table-hover table-bordered shadow-sm rounded overflow-hidden align-middle">
                    <thead class="table-dark text-center text-uppercase">
                        <tr>
                            <th class="py-3">Sr. No.</th>
                            <th class="py-3">Date</th>
                            <th class="py-3">Subject</th>
                            <th class="py-3">Faculty</th>
                            <th class="py-3">Total Lec.</th>
                            <th class="py-3">P</th>
                            <th class="py-3">A</th>
                            <th class="py-3">Overall %</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($attendanceStats as $index => $entry)
                            <tr class="text-center">
                                <td class="py-3">{{ $index + 1 }}</td>
                                <td class="py-3">{{ \Carbon\Carbon::parse($entry['date'])->format('d-m-Y') }}</td>
                                <td class="py-3">{{ $entry['subject_name'] }}</td>
                                <td class="py-3">{{ $entry['faculty'] }}</td>
                                <td class="py-3">{{ $entry['total_lectures'] }}</td>
                                <td class="py-3">{{ $entry['present'] }}</td>
                                <td class="py-3">{{ $entry['absent'] }}</td>
                                <td class="py-3">
                                    <span
                                        class="badge {{ $entry['percentage'] >= 75 ? 'bg-success' : 'bg-warning text-dark' }}">
                                        {{ $entry['percentage'] }}%
                                    </span>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="text-center text-danger py-4">
                                    No attendance data available for this date range.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        @if (count($attendanceStats) > 0)
            <div class="text-center my-4">
                <a href="{{ route('download.attendance.report') }}" class="btn btn-outline-primary">
                    <i class="fas fa-download"></i> Download Report
                </a>
            </div>
        @endif

    </div>



    <!-- START FOOTER -->
    <div class="footer section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="single_footer">
                        <a href="index.html"><img src="assets/images/all-img/footer logo1.png" alt="" /></a>
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
                            @forelse ($popularSubjects as $subject)
                                <li><a href="#">{{ $subject->subject_name }}</a></li>
                            @empty
                                <li><em>No subjects found</em></li>
                            @endforelse
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
    <script src="assets/js/jquery-1.12.4.min.js"></script>
    <!-- Latest compiled and minified Bootstrap -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- owl-carousel min js  -->
    <script src="assets/owlcarousel/js/owl.carousel.min.js"></script>
    <!-- jquery.slicknav -->
    <script src="assets/js/jquery.slicknav.js"></script>
    <!-- magnific-popup js -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- scrolltopcontrol js -->
    <script src="assets/js/scrolltopcontrol.js"></script>
    <!-- jquery purecounter vanilla js -->
    <script src="assets/js/purecounter_vanilla.js"></script>
    <!-- WOW - Reveal Animations When You Scroll -->
    <script src="assets/js/wow.min.js"></script>
    <!-- scripts js -->
    <script src="assets/js/scripts.js"></script>
</body>

</html>
