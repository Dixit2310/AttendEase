<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="AttendEase HTML Template" />
    <meta name="keywords" />
    <content="themes_mountain, college, course, e-learning, education, high school, kids, learning, online, online courses, school, student, teacher, tutor, university"
    />
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
    <!--- END CONTAINER -->
    </div>
    <!-- END NAVBAR -->

    <!-- START HOME -->
    <section id="home" class="home_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-xs-12 text-center"> <br><br><br><br><br>
                    <div class="home_content">
                        <h1>AttendEase is the best choice <br />for everyone!</h1>
                    </div>
                    {{-- <div class="home_sb">
                        <form action="#" class="banner_subs">
                            <input type="text" class="form-control home_si" placeholder="Search here"
                                required="required" />
                            <button type="button" class="subscribe__btn">
                                Search <i class="fa fa-paper-plane-o"></i>
                            </button>
                        </form>
                    </div> --}}
                </div>
                <!-- END COL-->
            </div>
            <!--- END ROW -->
        </div>
        <!--- END CONTAINER -->
    </section>
    <!-- END  HOME -->

    <!-- START ABOUT US HOME ONE -->
    <section class="ab_one section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s"
                    data-wow-offset="0">
                    <div class="ab_content">
                        <h2>
                            Learn & grow your <u><span>skills</span></u>
                        </h2>
                        <p>
                            "Automate and simplify attendance tracking with accuracy and
                            efficiency."
                        </p>
                    </div>
                    <div class="abmv">
                        <span class="ti-medall"></span>
                        <h4>Our Mission</h4>
                        <p>
                            Our mission is to streamline attendance management through
                            automation, enhancing accuracy, efficiency, and accessibility
                            for organizations and institutions.
                        </p>
                    </div>
                    <div class="abmv">
                        <span class="ti-wand"></span>
                        <h4>Our Vision</h4>
                        <p>
                            This is the revolutionize attendance management with a seamless,
                            automated system that ensures accuracy, transparency, and easy
                            of use for all users.
                        </p>
                    </div>
                    <!-- <a class="btn_one" href="about.html">Discover More</a> -->
                </div>
                <!--- END COL -->
                <div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"
                    data-wow-offset="0">
                    <div class="ab_img">
                        <img src="assets/images/all-img/about1.png" class="img-fluid" alt="image" />
                        <!-- <div class="wc_year">
       <h3><span>6k+</span> <br />Happy Clients</h3>
      </div> -->
                    </div>
                </div>
                <!--- END COL -->
            </div>
            <!--- END ROW -->
        </div>
        <!--- END CONTAINER -->
    </section>
    <!-- END ABOUT US HOME ONE -->

    <!-- START TOPIC-->
    <section class="topic_content_p2 section-padding">
        <div class="container">
            <div class="section-title">
                <h2>Subjects</h2>
                <p>
                    Popular <span><u>Subjects</u></span> For IT.
                </p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="single_tca sc_one">
                        <img src="assets/images/icon/ml.png" alt="" style="height: 60px; width: 89px;" />
                        <h2><a href="#" style="font-size: 20.5px;">Machine Learning</a></h2>
                        <span>Prof. Hiral Suthar</span>
                    </div>
                </div>
                <!-- END COL -->
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="single_tca sc_two">
                        <img src="assets/images/icon/dm.png" alt="" style="height: 60px; width: 89px;" />
                        <h2><a href="#">Data mining</a></h2>
                        <span>Prof. Nehal Rajput</span>
                    </div>
                </div>
                <!-- END COL -->
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="single_tca sc_three">
                        <img src="assets/images/icon/iot.png" alt="" style="height: 73px; width: 104px;" />
                        <h2><a href="#">IOT</a></h2>
                        <span>Prof. Shilpi Joshi</span>
                    </div>
                </div>
                <!-- END COL -->
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="single_tca sc_four">
                        <img src="assets/images/icon/java.png" alt="" style="height: 73px; width: 104px;" />
                        <h2><a href="#">Java</a></h2>
                        <span>Prof. Ankit Patel</span>
                    </div>
                </div>
                <!-- END COL -->
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="single_tca sc_five">
                        <img src="assets/images/icon/flutter.png" alt=""
                            style="height: 60px; width: 89px;" />
                        <h2><a href="#">Flutter</a></h2>
                        <span>Prof. Bhargav Patel</span>
                    </div>
                </div>
                <!-- END COL -->
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="single_tca sc_six">
                        <img src="assets/images/icon/php.png" alt="" style="height: 60px; width: 89px;" />
                        <h2><a href="#">PHP</a></h2>
                        <span>Prof. Rahul Rathod</span>
                    </div>
                </div>
                <!-- END COL -->
                <div class="col-lg-12 text-center"></div>
                <!--END COL -->
            </div>
            <!-- END ROW -->
        </div>
        <!-- END CONTAINER -->
    </section>
    <!-- END TOPIC -->

    <!-- START WHY CHOOSE US-->
    <section class="marketing_content_area section-padding">
        <div class="container">
            <div class="section-title">
                <h2>Why Choose AttendEase</h2>
                <p>
                    Find the <span><u>best system</u></span> for Attendance.
                </p>
            </div>
            <div class="row">

                <!-- END COL -->
                <div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"
                    data-wow-offset="0">
                    <div class="single_feature_one">
                        <div class="sf_top">
                            <span class="ti-heart ss_two"></span>
                            <h2>
                                <a href="single-service.html" target="_blank">Expert <br />Faculties</a>
                            </h2>
                        </div>
                        <p>
                            Here expert faculties, with their unparalleled knowledge and passion ignite a transformative
                            learning experience.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s"
                    data-wow-offset="0">
                    <div class="single_feature_one">
                        <div class="sf_top">
                            <span class="ti-light-bulb ss_five"></span>
                            <h2>
                                <a href="single-service.html" target="_blank">Teacher Monitoring</a>
                            </h2>
                        </div>
                        <p>
                            With a keen eye and a guiding , a teacher’s monitoring transforms classrooms into hubs of
                            growth.
                        </p>
                    </div>
                </div>
                <!-- END COL -->
                <div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s"
                    data-wow-offset="0">
                    <div class="single_feature_one">
                        <div class="sf_top">
                            <span class="ti-email ss_six"></span>
                            <h2>
                                <a href="single-service.html" target="_blank">24/7 Strong Support</a>
                            </h2>
                        </div>
                        <p>
                            Seamless attendance tracking with 24/7 support—because your workforce never stops, and
                            neither do we!
                        </p>
                    </div>
                </div>
                <!-- END COL -->
            </div>
            <!-- END ROW -->
        </div>
        <!-- END CONTAINER -->
    </section>
    <!-- END WHY CHOOSE US -->

    <!-- START FOOTER -->
    <div class="footer section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="single_footer">
                        <a href="{{ url('home') }}"><img src="assets/images/all-img/footer logo1.png"
                                alt="" /></a>
                        <p>
                            The AttendEasy boosts efficiency by automating record-keeping and reducing human error. It
                            provides
                            real-time data, enabling better decision-making and resource allocation.
                        </p>
                    </div>

                </div>
                <!--- END COL -->
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="single_footer">
                        <h4><u> Popular Subjects</u></h4>
                        <ul>
                            @forelse($subjects as $subject)
                                <li><a href="#">{{ $subject->subject_name }}</a></li>
                            @empty
                                <li><span class="text-danger">No subjects found.</span></li>
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
    <!-- jquery mixitup min js -->
    <script src="assets/js/jquery.mixitup.js"></script>
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
