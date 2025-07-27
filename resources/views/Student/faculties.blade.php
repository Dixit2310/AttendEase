<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="AttendEase HTML Template" />
    <meta
      name="keywords"
      content="theme_ocean, college, course, e-learning, education, high school, kids, learning, online, online courses, school, student, teacher, tutor, university"
    />
    <meta name="author" content="theme_ocean" />
    <!-- SITE TITLE -->
    <title>AttendEase</title>
    <!-- Latest Bootstrap min CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
    <!-- Google Font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700&amp;display=swap"
      rel="stylesheet"
    />
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
              <a href="{{url('home')}}">
                <img src="assets/images/all-img/New4.png" alt="" style="width: 200px; height: auto" />
              </a>
            </div>
          </div>
          <!--- END Col -->

          <div class="col-lg-6 col-md-9 col-sm-8">
            <div class="header_right">
              <nav id="main-menu" class="ms-auto">
                <ul>
                  <li><a class="nav-link" href="{{url('home')}}">Home</a></li>
                  <li><a class="nav-link" href="{{url('about')}}">About Us</a></li>
                  <li><a class="nav-link" href="{{url('faculties')}}">Faculties </a></li>
                  <li>
                    <a class="nav-link" href="{{url('time-table')}}"> Time-Table </a>
                  </li>

                  <li><a class="nav-link" href="{{url('contact')}}">Contact</a></li>
                </ul>
              </nav>
              <div id="mobile_menu"></div>
            </div>
          </div>
          <!--- END Col -->
          <div class="col-lg-4 col-md-3 col-sm-8 m-none">
            <div class="call_to_action" style="display: flex; justify-content: space-between; gap: 15px;">
                <a class="btn_two" href="#">Report</a>

                @if (session()->has('login') && session()->has('studentlist_id'))
                    <a class="btn_two" href="{{ route('account.view', ['id' => session('studentlist_id')]) }}">
                        {{ session('full_name') }}
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

    <!-- START SECTION TOP -->
    <section class="section-top">
      <div class="container">
        <div class="col-lg-10 offset-lg-1 text-center">
          <div
            class="section-top-title wow fadeInRight"
            data-wow-duration="1s"
            data-wow-delay="0.3s"
            data-wow-offset="0"
          >
            <h1>Faculties</h1>
            <ul>
              <li><a href="{{url('home')}}">Home</a></li>
              <li>/Faculties Page</li>
            </ul>
          </div>
          <!-- //.HERO-TEXT -->
        </div>
        <!--- END COL -->
      </div>
      <!--- END CONTAINER -->
    </section>
    <!-- END SECTION TOP -->

    <!-- START TEAM-->
    <section class="team_member section-padding">
        <div class="container">
            <div class="section-title">
                <h2>Faculties</h2>
                <p>Our Expert <span><u>Faculties</u></span></p>
            </div>

            <div class="row text-center" style="display: flex; flex-wrap: wrap; justify-content: center;">
                @forelse ($faculties as $faculty)
                    <div class="col-md-4" style="width: 25%; padding: 15px;">
                        <div class="our-team">
                            <div class="team_img" style="border-radius: 10px;">
                                @php
                                    // Normalize gender to ensure consistent comparison
                                    $gender = strtolower(trim($faculty->gender));

                                    // Set image name based on gender
                                    $imageFile = $gender === 'male' ? 'facultym.jpg' : 'facultyf.jpg';

                                    // Full image path
                                    $imagePath = asset('assets/images/all-img/' . $imageFile);

                                    // Alt text for accessibility
                                    $altText = ucfirst($gender) . ' Faculty';
                                @endphp

                                <img
                                    src="{{ $imagePath }}"
                                    alt="{{ $altText }}"
                                    style="width: 100%; height: auto; border-radius: 10px;">
                            </div>
                            <div class="team-content">
                                <h3 class="title">{{ $faculty->full_name }}</h3>
                                <span class="post">{{ $faculty->designation }}</span>
                            </div>
                        </div>
                    </div>
                @empty
                    <p>No faculty assigned for your department and semester.</p>
                @endforelse
            </div>
        </div>
    </section>
    <!-- END TEAM -->

    <!-- START FOOTER -->
    <div class="footer section-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-sm-6 col-xs-12">
          <div class="single_footer">
            <a href="index.html"><img src="assets/images/all-img/footer logo1.png" alt="" /></a>
            <p>
              The AttendEasy boosts efficiency by automating record-keeping and reducing human error. It provides
              real-time data, enabling better decision-making and resource allocation.
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
    <script
      data-cfasync="false"
      src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"
    ></script>
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
