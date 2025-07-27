<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="AttendEase HTML Template" />
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


    <!-- START LOGIN -->
    <section class="login_register section-padding">
        <!-- Center the logo -->
        <div style="text-align: center; margin-bottom: 20px;">
            <img src="{{ asset('assets/images/all-img/loginlogo1.png') }}" alt="Logo"
                style="max-width: 200px; height: auto; display: block; margin: 0 auto;">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-xs-12">

                    @if (!isset($faculty))
                        <div class="login">
                            <h4 class="login_register_title">Verify Students Details</h4>

                            <!-- Show validation errors -->
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form method="POST" action="{{ route('attendance.fetch') }}">
                                @csrf

                                <!-- Department Dropdown -->
                                <div class="form-group">
                                    <label for="department_id"><b>Department</b></label>
                                    <select id="department_id" class="form-control" name="department_id" required>
                                        <option value="">Select Department</option>
                                        @foreach ($departments as $department)
                                            <option value="{{ $department->department_id }}">
                                                {{ $department->department_name }}</option>
                                        @endforeach
                                    </select>
                                </div><br>

                                <!-- Semester -->
                                <div class="form-group">
                                    <label for="semester"><b>Semester</b></label>
                                    <input type="text" id="semester" class="form-control" name="semester" placeholder="Enter Semester" required>
                                </div>

                                <!-- Division -->
                                <div class="form-group">
                                    <label for="division"><b>Division</b></label>
                                    <input type="text" id="division" class="form-control" name="division" placeholder="Enter Division" required>
                                </div><br>

                                <div class="form-group col-lg-12">
                                    <button class="btn_one" type="submit">
                                        <span id="button-text">Submit</span>
                                    </button>
                                </div>
                            </form>


                        </div>
                    @else
                        <div class="faculty-details">
                            <h4 style="color: #1a2d62; font-weight: 900; font-size: 30px">Faculty Details</h4>
                            <div id="next-step-message" class="next-step-message">
                                <p>✅ Details have been successfully verified. Click <strong>Submit</strong> to proceed.
                                </p>
                            </div><br><br>
                            <div class="form-group">
                                <label for="faculty-enrollment"><b>Faculty Code</b></label>
                                <input type="text" id="faculty-enrollment" class="form-control"
                                    value="{{ $faculty->faculty_code }}" disabled />
                            </div><br>
                            <div class="form-group">
                                <label for="faculty-name"><b>Full Name</b></label>
                                <input type="text" id="faculty-name" class="form-control"
                                    value="{{ $faculty->full_name }}" disabled />
                            </div><br>
                            <div class="form-group">
                                <label for="faculty-email"><b>Email</b></label>
                                <input type="email" id="faculty-email" class="form-control"
                                    value="{{ $faculty->email }}" disabled />
                            </div><br>
                            <div class="form-group">
                                <label for="faculty-phone"><b>Phone</b></label>
                                <input type="text" id="faculty-phone" class="form-control"
                                    value="{{ $faculty->phone_number }}" disabled />
                            </div><br>
                            <div class="form-group col-lg-12 text-center">
                                <form method="POST" action="{{ route('fsend.otp') }}">
                                    @csrf
                                    <input type="hidden" name="faculty_code" value="{{ $faculty->faculty_code }}">
                                    <button class="btn_one" type="submit">Submit</button>
                                </form>
                            </div>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </section>

    <style>
        .student-details {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-top: 20px;
            text-align: left;
        }

        .student-details h4 {
            text-align: center;
            font-size: 22px;
            color: #333;
            margin-bottom: 15px;
        }

        .student-details .form-group {
            margin-bottom: 15px;
        }

        .student-details label {
            font-weight: bold;
            color: #555;
        }

        .student-details .form-control {
            border-radius: 6px;
            border: 1px solid #ccc;
            padding: 8px;
        }

        .btn_one {
            color: #fff;
            border: none;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .form-group.col-lg-12.text-center {
            display: flex;
            justify-content: center;
        }

        .next-step-message {
            text-align: center;
            margin-top: 20px;
            padding: 10px;
            background: #e8f5e9;
            color: #2e7d32;
            font-weight: bold;
            border-radius: 8px;
            border: 1px solid #2e7d32;
        }
    </style>

    <script>
        document.getElementById("verify-button").addEventListener("click", function() {
            const buttonText = document.getElementById("button-text");
            const buttonLoader = document.getElementById("button-loader");
            buttonText.style.display = "none";
            buttonLoader.style.display = "inline";

            setTimeout(function() {
                buttonLoader.style.display = "none";
                buttonText.style.display = "inline";
                document.getElementById("verification-form").style.display = "none";
                document.getElementById("student-details").style.display = "block";
                document.getElementById("student-enrollment").value = document.getElementById("Enrollment")
                    .value;
            }, 3000);
        });
    </script>
    <!-- END LOGIN -->




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
