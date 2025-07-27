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
    <link rel="stylesheet" href="Admin/assets/fonts/remix/remixicon.css">
    <link rel="stylesheet" href="Admin/assets/css/main.min.css">

    <!-- *************
  ************ Vendor Css Files *************
 ************ -->

    <!-- Scrollbar CSS -->
    <link rel="stylesheet" href="Admin/assets/vendor/overlay-scroll/OverlayScrollbars.min.css">
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
                <a href="{{ url('admin') }}">
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
                            <a href="{{ url('login') }}" class="btn btn-danger">Logout</a>
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
                    <img src="Admin\assets\images\user.jpg" class="img-shadow img-3x me-3 rounded-5"
                        alt="AttendEase Admin Templates">
                    <div class="m-0">
                        <h5 class="mb-1 profile-name text-nowrap text-truncate">Dixit Makwana</h5>
                        <p class="m-0 small profile-name text-nowrap text-truncate">Dept. Admin</p>
                    </div>
                </div>
                <!-- Sidebar profile ends
         -->

                <!-- Sidebar menu starts -->
                <div class="sidebarMenuScroll">
                    <ul class="sidebar-menu">
                        <li class="active current-page">
                            <a href="{{ url('admin.dashboard') }}">
                                <i class="ri-home-6-line"></i>
                                <span class="menu-text">Student Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('facultylist') }}">
                                <i class="ri-nurse-line"></i>
                                <span class="menu-text">Faculty List</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('studentlist') }}">
                                <i class="ri-user-line" style="font-size: 20px;"></i>
                                <span class="menu-text">Student List</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('departmentlist') }}">
                                <i class="ri-building-line" style="font-size: 20px;"></i>
                                <span class="menu-text">Department</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('subjectlist') }}">
                                <i class="ri-book-line" style="font-size: 20px;"></i>
                                <span class="menu-text">Subject</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('time-tablelist') }}">
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
                            <a href="{{ url('admin.dashboard') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item text-primary" aria-current="page">
                            Student Dashboard
                        </li>
                    </ol>
                    <!-- Breadcrumb ends -->



                </div>
                <!-- App Hero header ends -->

                <!-- App body starts -->
                <div class="app-body">

                    <form method="POST" action="{{ route('admin.dashboard') }}">
                        @csrf
                        <div class="row gx-3">
                            <div class="col-xxl-12 col-sm-12">
                                <div class="card mb-3 bg-1">
                                    <div class="card-body">
                                        <div class="py-4 px-3 text-white">
                                            <div class="row align-items-end">
                                                <!-- Department Dropdown -->
                                                <div class="col-xxl-3 col-lg-3 col-sm-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="department"> <b>Department</b>
                                                            <span class="text-danger">*</span></label>
                                                        <select class="form-select" id="department" name="department">
                                                            <option value="0">Select</option>
                                                            @foreach ($departments as $department)
                                                                <option value="{{ $department->department_id }}">
                                                                    {{ $department->department_name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                <!-- Semester Dropdown -->
                                                <div class="col-xxl-3 col-lg-3 col-sm-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="semester"> <b>Semester</b> <span
                                                                class="text-danger">*</span></label>
                                                        <select class="form-select" id="semester" name="semester">
                                                            <option value="0">Select</option>
                                                            @foreach ($semesters as $semester)
                                                                <option value="{{ $semester->semester }}">
                                                                    {{ ' ' . $semester->semester }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                <!-- Division Dropdown -->
                                                <div class="col-xxl-3 col-lg-3 col-sm-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="division"> <b>Division</b> <span
                                                                class="text-danger">*</span></label>
                                                        <select class="form-select" id="division" name="division">
                                                            <option value="0">Select</option>
                                                            @foreach ($divisions as $division)
                                                                <option value="{{ $division->division }}">
                                                                    {{ 'Division' . $division->division }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                <!-- Submit Button -->
                                                <div class="col-xxl-3 col-lg-3 col-sm-6">
                                                    <div class="mb-3">
                                                        <label class="form-label d-block">&nbsp;</label>
                                                        <button type="submit" class="btn btn-primary w-100">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                    <!-- Display Student Count, Present Count, and Absent Count -->
                    <div class="mt-4 d-flex gap-3">
                        <div class="d-flex align-items-center">
                            <div class="icon-box lg bg-arctic rounded-3 me-3">
                                <i class="ri-group-line fs-4" style="font-size: 20px;"></i>
                            </div>
                            <div class="d-flex flex-column">
                                <h2 class="m-0 lh-1">{{ $studentsCount }}</h2>
                                <p class="m-0">Total Students</p>
                            </div>
                        </div>
                    </div>



                    <!-- Row ends -->

                    {{-- <!-- Sales stats starts -->
          <div class="ms-auto d-lg-flex d-none flex-row">
            <div class="d-flex flex-row gap-1 day-sorting">
              <button class="btn btn-sm btn-primary">Today</button>
              <button class="btn btn-sm">1w</button>
              <button class="btn btn-sm">1m</button>
              <button class="btn btn-sm">6m</button>
              <button class="btn btn-sm">1y</button>
            </div>
          </div> <br>
          <!-- Sales stats ends -->

          <!-- Row starts -->
        <div class="row gx-3">
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="p-2 border border-primary rounded-circle me-3" style="border-color: blue !important;">
                                <div class="icon-box md bg-primary-subtle rounded-5" style="background-color: rgba(0, 0, 255, 0.1) !important;">
                                    <i class="ri-group-line fs-4" style="color: blue !important;"></i> <!-- Updated Icon -->
                                </div>
                            </div>
                            <div class="d-flex flex-column">
                                <h2 class="lh-1">1500</h2>
                                <p class="m-0">Total Students</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-end justify-content-between mt-1">
                            <a class="text-primary" href="javascript:void(0);" style="color: blue !important;">
                                <span>View All</span>
                                <i class="ri-arrow-right-line ms-1" style="color: blue !important;"></i>
                            </a>
                            <div class="text-end">
                                <p class="mb-0 text-primary" style="color: blue !important;">+40%</p>
                                <span class="badge bg-primary-subtle text-primary small" style="background-color: rgba(0, 0, 255, 0.1) !important; color: blue !important;">this month</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="p-2 border border-success rounded-circle me-3" style="border-color: green !important;">
                                <div class="icon-box md bg-success-subtle rounded-5" style="background-color: rgba(0, 128, 0, 0.1) !important;">
                                    <i class="ri-user-follow-line fs-4" style="color: green !important;"></i> <!-- Updated Icon -->
                                </div>
                            </div>
                            <div class="d-flex flex-column">
                                <h2 class="lh-1">1200</h2>
                                <p class="m-0">Active Students</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-end justify-content-between mt-1">
                            <a class="text-success" href="javascript:void(0);" style="color: green !important;">
                                <span>View All</span>
                                <i class="ri-arrow-right-line ms-1" style="color: green !important;"></i>
                            </a>
                            <div class="text-end">
                                <p class="mb-0 text-success" style="color: green !important;">+30%</p>
                                <span class="badge bg-success-subtle text-success small" style="background-color: rgba(0, 128, 0, 0.1) !important; color: green !important;">this month</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="p-2 border border-danger rounded-circle me-3">
                                <div class="icon-box md bg-danger-subtle rounded-5">
                                    <i class="ri-user-unfollow-line fs-4 text-danger"></i> <!-- Updated Icon -->
                                </div>
                            </div>
                            <div class="d-flex flex-column">
                                <h2 class="lh-1">300</h2>
                                <p class="m-0">Inactive Students</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-end justify-content-between mt-1">
                            <a class="text-danger" href="javascript:void(0);">
                                <span>View All</span>
                                <i class="ri-arrow-right-line ms-1"></i>
                            </a>
                            <div class="text-end">
                                <p class="mb-0 text-danger">+60%</p>
                                <span class="badge bg-danger-subtle text-danger small">this month</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="p-2 border border-warning rounded-circle me-3">
                                <div class="icon-box md bg-warning-subtle rounded-5">
                                    <i class="ri-user-star-line fs-4 text-warning" style="font-size: 20px;"></i> <!-- Changed Icon -->
                                </div>
                            </div>
                            <div class="d-flex flex-column">
                                <h2 class="lh-1">80</h2>
                                <p class="m-0">Active Students</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-end justify-content-between mt-1">
                            <a class="text-warning" href="javascript:void(0);">
                                <span>View All</span>
                                <i class="ri-arrow-right-line ms-1"></i>
                            </a>
                            <div class="text-end">
                                <p class="mb-0 text-warning">+20%</p>
                                <span class="badge bg-warning-subtle text-warning small">this month</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

          <!-- Row ends --> --}}

                    <!-- Row starts -->
                    <!--<div class="row gx-3">
            <div class="col-xl-2 col-sm-6 col-12">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center">
                    <div class="icon-box md rounded-5 bg-primary mb-3">
                      <i class="ri-verified-badge-line fs-4 lh-1"></i>
                    </div>
                    <h6>Appointments</h6>
                    <h2 class="text-primary m-0">639</h2>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-2 col-sm-6 col-12">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center">
                    <div class="icon-box md rounded-5 bg-primary mb-3">
                      <i class="ri-stethoscope-line fs-4 lh-1"></i>
                    </div>
                    <h6>Doctors</h6>
                    <h2 class="text-primary m-0">83</h2>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-2 col-sm-6 col-12">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center">
                    <div class="icon-box md rounded-5 bg-primary mb-3">
                      <i class="ri-psychotherapy-line fs-4 lh-1"></i>
                    </div>
                    <h6>Staff</h6>
                    <h2 class="text-primary m-0">296</h2>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-2 col-sm-6 col-12">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center">
                    <div class="icon-box md rounded-5 bg-primary mb-3">
                      <i class="ri-lungs-line fs-4 lh-1"></i>
                    </div>
                    <h6>Operations</h6>
                    <h2 class="text-primary m-0">49</h2>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-2 col-sm-6 col-12">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center">
                    <div class="icon-box md rounded-5 bg-primary mb-3">
                      <i class="ri-hotel-bed-line fs-4 lh-1"></i>
                    </div>
                    <h6>Admitted</h6>
                    <h2 class="text-primary m-0">372</h2>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-2 col-sm-6 col-12">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center">
                    <div class="icon-box md rounded-5 bg-primary mb-3">
                      <i class="ri-walk-line fs-4 lh-1"></i>
                    </div>
                    <h6>Discharged</h6>
                    <h2 class="text-primary m-0">253</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Row ends -->

                    <!-- Row starts -->

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
    <script src="Admin/assets/js/jquery.min.js"></script>
    <script src="Admin/assets/js/bootstrap.bundle.min.js"></script>
    <script src="Admin/assets/js/moment.min.js"></script>

    <!-- *************
   ************ Vendor Js Files *************
  ************* -->

    <!-- Overlay Scroll JS -->
    <script src="Admin/assets/vendor/overlay-scroll/jquery.overlayScrollbars.min.js"></script>
    <script src="Admin/assets/vendor/overlay-scroll/custom-scrollbar.js"></script>

    <!-- Apex Charts -->
    <script src="Admin/assets/vendor/apex/apexcharts.min.js"></script>
    <script src="Admin/assets/vendor/apex/custom/home/patients.js"></script>
    <script src="Admin/assets/vendor/apex/custom/home/treatment.js"></script>
    <script src="Admin/assets/vendor/apex/custom/home/available-beds.js"></script>
    <script src="Admin/assets/vendor/apex/custom/home/earnings.js"></script>
    <script src="Admin/assets/vendor/apex/custom/home/gender-age.js"></script>
    <script src="Admin/assets/vendor/apex/custom/home/claims.js"></script>

    <!-- Custom JS files -->
    <script src="Admin/assets/js/custom.js"></script>
</body>


</html>
