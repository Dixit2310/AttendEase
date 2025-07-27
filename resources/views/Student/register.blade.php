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

                    @if (!isset($student))
                        <div class="login">
                            <h4 class="login_register_title">Verify Your Details</h4>

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

                            <form method="POST" action="{{ route('verify.enrollment') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="">Enrollment Number</label>
                                    <input type="text" id="Enrollment" class="form-control requiredField input-label"
                                        name="Enrollment"  />
                                </div>
                                <div class="form-group col-lg-12">
                                    <button class="btn_one" type="submit">
                                        <span id="button-text">Verify Now</span>
                                    </button>
                                </div>
                            </form>

                            <p>You have an account? <a href="{{ url('/') }}">Login</a></p>
                        </div>
                    @else
                        <div class="student-details">
                            <h4 style="color: #1a2d62; font-weight: 900; font-size: 30px">Student Details</h4>
                            <div id="next-step-message" class="next-step-message">
                                <p>✅ Your details have been successfully verified. If the provided information is correct,
                                    please click the <strong>Submit</strong> button to proceed with password generation.</p>
                            </div><br>
                            <div class="form-group">
                                <label for="student-enrollment">Enrollment Number</label>
                                <input type="text" id="student-enrollment" class="form-control"
                                    value="{{ $student->enrollment }}" disabled />
                            </div>
                            <div class="form-group">
                                <label for="student-name">Name</label>
                                <input type="text" id="student-name" class="form-control"
                                    value="{{ $student->full_name }}" disabled />
                            </div>
                            <div class="form-group">
                                <label for="student-email">Email</label>
                                <input type="email" id="student-email" class="form-control"
                                    value="{{ $student->email }}" disabled />
                            </div>
                            <div class="form-group">
                                <label for="student-phone">Phone</label>
                                <input type="text" id="student-phone" class="form-control"
                                    value="{{ $student->phone }}" disabled />
                            </div>
                            <div class="form-group col-lg-12 text-center">
                                <form method="POST" action="{{ route('send.otp') }}">
                                    @csrf
                                    <input type="hidden" name="enrollment" value="{{ $student->enrollment }}">
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
