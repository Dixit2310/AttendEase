<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Dashboard</title>

  <!-- Meta -->
  <meta name="description" content="Marketplace for Bootstrap Admin Dashboards">
  <meta property="og:title" content="Admin Templates - Dashboard Templates">
  <meta property="og:description" content="Marketplace for Bootstrap Admin Dashboards">
  <meta property="og:type" content="Website">
  <link rel="shortcut icon" href="assets/images/favicon.svg">

  <!-- *************
		************ CSS Files *************
	************* -->
  <link rel="stylesheet" href="{{ asset('Admin/assets/fonts/remix/remixicon.css') }}">
  <link rel="stylesheet" href="{{ asset('Admin/assets/css/main.min.css') }}">

  <!-- *************
		************ Vendor Css Files *************
	************ -->

  <!-- Scrollbar CSS -->
  <link rel="stylesheet" href="{{ asset('Admin/assets/vendor/overlay-scroll/OverlayScrollbars.min.css') }}">
</head>

<body>
  <!-- Page wrapper starts -->
  <div class="page-wrapper">

    <!-- App header starts -->
    <div class="app-header d-flex align-items-center">

      <!-- Toggle buttons starts -->
      <div class="d-flex">
        <button class="toggle-sidebar">
          <i class="ri-menu-line"></i>
        </button>
        <button class="pin-sidebar">
          <i class="ri-menu-line"></i>
        </button>
      </div>
      <!-- Toggle buttons ends -->

      <!-- App brand starts -->
      <div class="app-brand ms-3">
        <a href="{{url('admin')}}">
            <img src="Admin\assets\images\logo.png" alt="" style="width: 130px; height: auto" />
          </a>
      </div>
      <!-- App brand ends -->

      <!-- App header actions starts -->
      <div class="header-actions">

        <!-- Search container starts -->
        <div class="search-container d-lg-block d-none mx-3">
          <input type="text" class="form-control" id="searchId" placeholder="Search">
          <i class="ri-search-line"></i>
        </div>
        <!-- Search container ends -->

        <!-- Header actions starts -->
        <div class="d-lg-flex d-none gap-2">
        </div>
        <!-- Header actions ends -->

        <!-- Header user settings starts -->
        <div class="dropdown ms-2">
          <a id="userSettings" class="dropdown-toggle d-flex align-items-center" href="#!" role="button"
            data-bs-toggle="dropdown" aria-expanded="false">
            <div class="avatar-box">DM<span class="status busy"></span></div>
          </a>
          <div class="dropdown-menu dropdown-menu-end shadow-lg">
            <div class="px-3 py-2">
              <span class="small">Admin</span>
              <h6 class="m-0">Dixit Makwana</h6>
            </div>
            <div class="mx-3 my-2 d-grid">
              <a href="login.html" class="btn btn-danger">Logout</a>
            </div>
          </div>
        </div>
        <!-- Header user settings ends -->

      </div>
      <!-- App header actions ends -->

    </div>
    <!-- App header ends -->

    <!-- Main container starts -->
    <div class="main-container">

      <!-- Sidebar wrapper starts -->
      <nav id="sidebar" class="sidebar-wrapper">

        <!-- Sidebar profile starts -->
        <div class="sidebar-profile">
            <img src="Admin\assets\images\user.jpg" class="img-shadow img-3x me-3 rounded-5" alt="AttendEase Admin Templates">
            <div class="m-0">
              <h5 class="mb-1 profile-name text-nowrap text-truncate">Dixit Makwana</h5>
              <p class="m-0 small profile-name text-nowrap text-truncate">Dept. Admin</p>
            </div>
          </div>
        <!-- Sidebar profile ends -->

        <!-- Sidebar menu starts -->
        <div class="sidebarMenuScroll">
            <ul class="sidebar-menu">
              <li>
                <a href="{{url('admin.dashboard')}}">
                  <i class="ri-home-6-line"></i>
                  <span class="menu-text">Student Dashboard</span>
                </a>
              </li>
              <li>
                <a href="{{url('faculty.dashboard')}}">
                  <i class="ri-home-smile-2-line"></i>
                  <span class="menu-text">Faculty Dashboard</span>
                </a>
              </li>
              <li>
                <a href="{{url('facultylist')}}">
                  <i class="ri-nurse-line"></i>
                  <span class="menu-text">Faculty List</span>
                </a>
              </li>
              <li class="active current-page">
                <a href="{{url('studentlist')}}">
                  <i class="ri-user-line" style="font-size: 20px;"></i> <!-- Changed Icon -->
                  <span class="menu-text">Student List</span>
                </a>
              </li>
              <li>
                <a href="{{url('departmentlist')}}">
                  <i class="ri-building-line" style="font-size: 20px;"></i> <!-- Changed Icon -->
                  <span class="menu-text">Department</span>
                </a>
              </li>
              <li>
                <a href="{{url('subjectlist')}}">
                  <i class="ri-book-line" style="font-size: 20px;"></i> <!-- Changed Icon -->
                  <span class="menu-text">Subject</span>
                </a>
              </li>
              <li>
                <a href="{{url('time-tablelist')}}">
                  <i class="ri-calendar-check-line" style="font-size: 20px;"></i>
                  <span class="menu-text">Time-table</span>
                </a>
              </li>
            </ul>
        </div>
        <!-- Sidebar menu ends -->
      </nav>
      <!-- Sidebar wrapper ends -->


        <!-- App container starts -->
        <div class="app-container">

          <!-- App hero header starts -->
          <div class="app-hero-header d-flex align-items-center">

            <!-- Breadcrumb starts -->
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <i class="ri-home-8-line lh-1 pe-3 me-3 border-end"></i>
                <a href="index.html">Home</a>
              </li>
              <li class="breadcrumb-item text-primary" aria-current="page">
                Student Profile
              </li>
            </ol>
            <!-- Breadcrumb ends -->

            <!-- Sales stats starts -->
            <div class="ms-auto d-lg-flex d-none flex-row">
                <div class="d-flex flex-row gap-1 day-sorting">
                  <button class="btn btn-sm btn-primary">Today</button>
                  <button class="btn btn-sm">1w</button>
                  <button class="btn btn-sm">1m</button>
                  <button class="btn btn-sm">6m</button>
                  <button class="btn btn-sm">1y</button>
                </div>
              </div>
            <!-- Sales stats ends -->

          </div>
          <!-- App Hero header ends -->

          <!-- App body starts -->
          <div class="app-body">

            <!-- Row starts -->
            <div class="row gx-3">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Student Profile</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('profile.view', $student->id ?? '') }}" method="POST">
                                @csrf
                                <div class="row gx-3">
                                    <div class="col-sm-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row gx-3">
                                                    <div class="col-sm-12">
                                                        <div class="bg-light rounded-2 px-3 py-2 mb-3">
                                                            <h6 class="m-0">Student Details</h6>
                                                        </div>
                                                    </div>

                                                    <!-- Full Name -->
                                                    <input type="hidden" name="full_name" value="{{ $student->full_name ?? '' }}">
                                                    <div class="col-xxl-3 col-lg-4 col-sm-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="full_name">Full Name</label>
                                                            <input type="text" class="form-control" id="full_name" value="{{ $student->full_name ?? '' }}" disabled>
                                                        </div>
                                                    </div>

                                                    <!-- Email -->
                                                    <input type="hidden" name="email" value="{{ $student->email ?? '' }}">
                                                    <div class="col-xxl-3 col-lg-4 col-sm-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="email">Email</label>
                                                            <input type="email" class="form-control" id="email" value="{{ $student->email ?? '' }}" disabled>
                                                        </div>
                                                    </div>

                                                    <!-- Enrollment Number -->
                                                    <input type="hidden" name="enrollment" value="{{ $student->enrollment ?? '' }}">
                                                    <div class="col-xxl-3 col-lg-4 col-sm-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="enrollment">Enrollment Number</label>
                                                            <input type="text" class="form-control" id="enrollment" value="{{ $student->enrollment ?? '' }}" disabled>
                                                        </div>
                                                    </div>

                                                    <!-- Phone -->
                                                    <input type="hidden" name="phone" value="{{ $student->phone ?? '' }}">
                                                    <div class="col-xxl-3 col-lg-4 col-sm-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="phone">Phone Number</label>
                                                            <input type="text" class="form-control" id="phone" value="{{ $student->phone ?? '' }}" disabled>
                                                        </div>
                                                    </div>

                                                    <!-- Temporary Password -->
                                                    <input type="hidden" name="temp_password" value="{{ $student->temp_password ?? '' }}">
                                                    <div class="col-xxl-3 col-lg-4 col-sm-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="temp_password">Temporary Password</label>
                                                            <input type="password" class="form-control" id="temp_password" value="{{ $student->temp_password ?? '' }}" disabled>
                                                        </div>
                                                    </div>

                                                    <!-- Password -->
                                                    <input type="hidden" name="password" value="{{ $student->password ?? '' }}">
                                                    <div class="col-xxl-3 col-lg-4 col-sm-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="password">Password</label>
                                                            <input type="password" class="form-control" id="password" value="{{ $student->password ?? '' }}" disabled>
                                                        </div>
                                                    </div>

                                                    <!-- Gender -->
                                                    <input type="hidden" name="gender" value="{{ $student->gender ?? '' }}">
                                                    <div class="col-xxl-3 col-lg-4 col-sm-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Gender</label>
                                                            <input type="text" class="form-control" value="{{ ucfirst($student->gender ?? '') }}" disabled>
                                                        </div>
                                                    </div>

                                                    <!-- Date of Birth -->
                                                    <input type="hidden" name="dob" value="{{ $student->dob ?? '' }}">
                                                    <div class="col-xxl-3 col-lg-4 col-sm-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="dob">Date of Birth</label>
                                                            <input type="date" class="form-control" id="dob" value="{{ $student->dob ?? '' }}" disabled>
                                                        </div>
                                                    </div>

                                                    <!-- Department -->
                                                    <input type="hidden" name="department" value="{{ $student->department ?? '' }}">
                                                    <div class="col-xxl-3 col-lg-4 col-sm-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="department">Department</label>
                                                            <input type="text" class="form-control" value="{{ $student->department ?? '' }}" disabled>
                                                        </div>
                                                    </div>

                                                    <!-- Semester -->
                                                    <input type="hidden" name="semester" value="{{ $student->semester ?? '' }}">
                                                    <div class="col-xxl-3 col-lg-4 col-sm-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="semester">Semester</label>
                                                            <input type="number" class="form-control" id="semester" value="{{ $student->semester ?? '' }}" disabled>
                                                        </div>
                                                    </div>

                                                    <!-- Division -->
                                                    <input type="hidden" name="division" value="{{ $student->division ?? '' }}">
                                                    <div class="col-xxl-3 col-lg-4 col-sm-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="division">Division</label>
                                                            <input type="text" class="form-control" id="division" value="{{ $student->division ?? '' }}" disabled>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-12 d-flex gap-2 justify-content-end">
                                                        <a href="{{ url('studentlist') }}" class="btn btn-primary ms-auto">Back</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>



                        </div>
                    </div>
                </div>
            </div>
            <!-- Row ends -->

          </div>
          <!-- App body ends -->

          <!-- App footer starts -->
          <div class="app-footer bg-white">
            <span>© AttendEase admin 2025</span>
          </div>
          <!-- App footer ends -->

        </div>
        <!-- App container ends -->

      </div>
      <!-- Main container ends -->

    </div>
    <!-- Page wrapper ends -->

    <!-- *************
			************ JavaScript Files *************
		************* -->
    <!-- Required jQuery first, then Bootstrap Bundle JS -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/moment.min.js"></script>

    <!-- *************
			************ Vendor Js Files *************
		************* -->

    <!-- Overlay Scroll JS -->
    <script src="assets/vendor/overlay-scroll/jquery.overlayScrollbars.min.js"></script>
    <script src="assets/vendor/overlay-scroll/custom-scrollbar.js"></script>

    <!-- Raty JS -->
    <script src="assets/vendor/rating/raty.js"></script>
    <script src="assets/vendor/rating/raty-custom.js"></script>

    <!-- Custom JS files -->
    <script src="assets/js/custom.js"></script>
  </body>

</html>
