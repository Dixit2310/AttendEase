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
  <link rel="shortcut icon" href="{{ asset('assets/images/favicon.svg') }}">

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
                <a href="{{url('facultylist')}}">
                  <i class="ri-nurse-line"></i>
                  <span class="menu-text">Faculty List</span>
                </a>
              </li>
              <li>
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
            <li class="active current-page">
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
                Edit Student
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
                            <h5 class="card-title">Edit Time-table</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.timetable.update', $timetable->timetable_id) }}" method="POST" class="p-4 border rounded shadow-sm bg-white">
                                @csrf
                                <h4 class="mb-4 text-primary">Update Timetable</h4>

                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="date" class="form-label fw-semibold">Date</label>
                                        <input type="date" class="form-control" id="date" name="date" value="{{ old('date', $timetable->date) }}" required>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="division" class="form-label fw-semibold">Division</label>
                                        <input type="text" name="division" id="division" class="form-control" value="{{ old('division', $timetable->division) }}" required>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="starttime" class="form-label fw-semibold">Start Time</label>
                                        <input type="time" class="form-control" id="starttime" name="starttime" value="{{ old('starttime', $timetable->starttime) }}" required>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="endtime" class="form-label fw-semibold">End Time</label>
                                        <input type="time" class="form-control" id="endtime" name="endtime" value="{{ old('endtime', $timetable->endtime) }}" required>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="subject_id" class="form-label fw-semibold">Subject</label>
                                        <select name="subject_id" id="subject_id" class="form-select" required>
                                            <option value="">Select Subject</option>
                                            @foreach ($subjects as $subject)
                                                <option value="{{ $subject->subject_id }}" {{ $subject->subject_id == old('subject_id', $timetable->subject_id) ? 'selected' : '' }}>
                                                    {{ $subject->subject_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="faculty_id" class="form-label fw-semibold">Faculty</label>
                                        <select name="faculty_id" id="faculty_id" class="form-select" required>
                                            <option value="">Select Faculty</option>
                                            @foreach ($faculties as $faculty)
                                                <option value="{{ $faculty->faculty_id }}" {{ $faculty->faculty_id == old('faculty_id', $timetable->faculty_id) ? 'selected' : '' }}>
                                                    {{ $faculty->full_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="department_id" class="form-label fw-semibold">Department</label>
                                        <select name="department_id" id="department_id" class="form-select" required>
                                            <option value="">Select Department</option>
                                            @foreach ($departments as $department)
                                                <option value="{{ $department->department_id }}" {{ $department->department_id == old('department_id', $timetable->department_id) ? 'selected' : '' }}>
                                                    {{ $department->department_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="semester" class="form-label fw-semibold">Semester</label>
                                        <input type="text" name="semester" id="semester" class="form-control" value="{{ old('semester', $timetable->semester) }}" required>
                                    </div>
                                </div>
                                <br>

                                <div class="col-sm-12 d-flex gap-2 justify-content-end">
                                    <a href="{{ route('time-tablelist') }}" class="btn btn-outline-secondary">Cancel</a>
                                    <button type="submit" class="btn btn-primary">Update</button>
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

    <!-- Custom JS files -->
    <script src="assets/js/custom.js"></script>
  </body>


</html>
