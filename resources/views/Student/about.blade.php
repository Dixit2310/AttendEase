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

    <!-- START SECTION TOP -->
    <section class="section-top">
        <div class="container">
            <div class="col-lg-10 offset-lg-1 text-center">
                <div class="section-top-title wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s"
                    data-wow-offset="0">
                    <h1>About Us</h1>
                    <ul>
                        <li><a href="{{ url('home') }}">Home</a></li>
                        <li>/ About Us</li>
                    </ul>
                </div>
                <!-- //.HERO-TEXT -->
            </div>
            <!--- END COL -->
        </div>
        <!--- END CONTAINER -->
    </section>
    <!-- END SECTION TOP -->

    <!-- START TOP PROMO FEATURES -->
    <section class="tp_feature section-padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"
                    data-wow-offset="0">
                    <div class="single_tp">
                        <h3><u>Who We Are</u></h3>
                        <p>
                            Highlight your mission and vision in revolutionizing attendance tracking. Mention your
                            expertise in HR tech, automation, or workforce management.
                        </p>
                    </div>
                </div>
                <!-- END COL -->
                <div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s"
                    data-wow-offset="0">
                    <div class="single_tp">
                        <h3><u>What We Offer</u></h3>
                        <p>
                            Biometric or facial recognition attendance cloud-based real-time tracking attendance
                            management integration Emphasize how your solution improves accuracy, efficiency.
                        </p>
                    </div>
                </div>
                <!-- END COL -->
                <div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s"
                    data-wow-offset="0">
                    <div class="single_tp">
                        <h3><u>Why Choose Us</u></h3>
                        <p>
                            Our system’s benefits, such as: 'Automation' Reduces manual work and errors. Security &
                            Compliance: Ensures data protection and regulatory adherence.
                        </p>
                    </div>
                </div>
                <!-- END COL -->
            </div>
            <!-- END ROW -->
        </div>
        <!-- END CONTAINER -->
    </section>
    <!-- END TOP PROMO FEATURES -->

    <!-- START ABOUT US HOME ONE -->
    <section class="ab_one section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"
                    data-wow-offset="0">
                    <div class="ab_img">
                        <img src="assets/images/all-img/about2.png" class="img-fluid" alt="image" />
                    </div>
                </div>
                <!--- END COL -->
                <div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s"
                    data-wow-offset="0">
                    <div class="ab_content"> <br><br>
                        <h2>
                            Learn new skills to go
                            <u><span>ahead for your </span></u> career.
                        </h2>
                        <h4>
                                In today's fast-paced work and academic environments, efficiency and accuracy are crucial.
                            An Attendance Management System is an essential tool that helps organizations, schools, and
                            businesses streamline attendance tracking, ensuring productivity and transparency
                        </h4>

                    </div>
                </div>
                <!--- END COL -->
            </div>
            <!--- END ROW -->
        </div>
        <!--- END CONTAINER -->
    </section>
    <!-- END ABOUT US HOME ONE -->

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
                            learning
                            experience.
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

    <!-- START FAQ -->
    <section class="faq_area section-padding">
        <div class="container">
            <div class="section-title">
                <h2>Introducing</h2>
                <p>
                    Our Developing <span><u>Team</u></span>
                </p>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6 col-sm-6 col-xs-12">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    Dixit Makwana
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Enrollment number :- 2204030101968</p>
                                </div>
                            </div>
                        </div>
                        <!-- END ACCORDION ITEM  -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Rudra Vora
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Enrollment Number :-2204030102807</p>
                                </div>
                            </div>
                        </div>
                        <!-- END ACCORDION ITEM  -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    Nandani Patil
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Enrollment Number :- 2204030102340</p>
                                </div>
                            </div>
                        </div>
                        <!-- END ACCORDION ITEM  -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false"
                                    aria-controls="collapseFour">
                                    Khushi Bhavsar
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Enerollment Number :- 2204030101645</p>
                                </div>
                            </div>
                        </div>
                        <!-- END ACCORDION ITEM  -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                    Khushbu Vaghela
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Enrollment Numnber :- 2204030102759</p>
                                </div>
                            </div>
                        </div>
                        <!-- END ACCORDION ITEM  -->
                    </div>
                </div>
                <!-- END COL  -->
                <div class="col-lg-6 col-sm-6 col-xs-12">
                    <div class="pt_faq"style="width: 150%; padding: 10px;">
                        <img src="assets\images\all-img\team.jpg" class="img-fluid" alt="image" />
                    </div>
                </div>
                <!-- END COL  -->
            </div>
            <!--END  ROW  -->
        </div>
        <!--- END CONTAINER -->
    </section>
    <!-- END FAQ -->

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
                        <h4><u>Popular Subjects</u></h4>
                        <ul>
                            @forelse ($subjects as $subject)
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
