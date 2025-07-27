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
            <img src="{{ asset('Admin\assets\images\user.jpg') }}" class="img-shadow img-3x me-3 rounded-5" alt="AttendEase Admin Templates">
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
                    <h5 class="card-title">Edit Student</h5>
                  </div>
                  <div class="card-body">

                    <!-- Row starts -->
                    <form action="{{ route('admin.student.update', $student->studentlist_id) }}" method="POST">
                        @csrf
                        <input type="hidden" name="_method" value="POST"> <!-- Using POST explicitly -->

                        <div class="row gx-3">
                            <div class="col-sm-12">
                                <div class="bg-light rounded-2 px-3 py-2 mb-3">
                                    <h6 class="m-0">Student Details</h6>
                                </div>
                            </div>

                            <!-- Full Name -->
                            <div class="col-xxl-3 col-lg-4 col-sm-6">
                                <div class="mb-3">
                                    <label for="full_name" class="form-label">Full Name</label>
                                    <input type="text" class="form-control @error('full_name') is-invalid @enderror"
                                        id="full_name" name="full_name" value="{{ old('full_name', $student->full_name) }}" required>
                                    @error('full_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="col-xxl-3 col-lg-4 col-sm-6">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        id="email" name="email" value="{{ old('email', $student->email) }}" required>
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Enrollment -->
                            <div class="col-xxl-3 col-lg-4 col-sm-6">
                                <div class="mb-3">
                                    <label for="enrollment" class="form-label">Enrollment</label>
                                    <input type="text" class="form-control @error('enrollment') is-invalid @enderror"
                                        id="enrollment" name="enrollment" value="{{ old('enrollment', $student->enrollment) }}" required>
                                    @error('enrollment')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Phone -->
                            <div class="col-xxl-3 col-lg-4 col-sm-6">
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Phone</label>
                                    <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                        id="phone" name="phone" value="{{ old('phone', $student->phone) }}" required>
                                    @error('phone')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Gender -->
                            <div class="col-xxl-3 col-lg-4 col-sm-6">
                                <div class="mb-3">
                                    <label for="gender" class="form-label">Gender</label>
                                    <select class="form-control @error('gender') is-invalid @enderror" id="gender" name="gender" required>
                                        <option value="male" {{ old('gender', $student->gender) == 'male' ? 'selected' : '' }}>Male</option>
                                        <option value="female" {{ old('gender', $student->gender) == 'female' ? 'selected' : '' }}>Female</option>
                                        <option value="other" {{ old('gender', $student->gender) == 'other' ? 'selected' : '' }}>Other</option>
                                    </select>
                                    @error('gender')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Date of Birth -->
                            <div class="col-xxl-3 col-lg-4 col-sm-6">
                                <div class="mb-3">
                                    <label for="dob" class="form-label">Date of Birth</label>
                                    <input type="date" class="form-control @error('dob') is-invalid @enderror"
                                        id="dob" name="dob" value="{{ old('dob', $student->dob) }}" required>
                                    @error('dob')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Department -->
                            <div class="col-xxl-3 col-lg-4 col-sm-6">
                                <div class="mb-3">
                                    <label class="form-label" for="department_id">Department</label>
                                    <select class="form-select @error('department_id') is-invalid @enderror"
                                            id="department_id" name="department_id">
                                        <option value="">Select</option>
                                        @foreach ($departments as $department)
                                            <option value="{{ $department->department_id }}"
                                                {{ old('department_id', $student->department_id ?? '') == $department->department_id ? 'selected' : '' }}>
                                                {{ $department->department_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('department_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Semester -->
                            <div class="col-xxl-3 col-lg-4 col-sm-6">
                                <div class="mb-3">
                                    <label for="semester" class="form-label">Semester</label>
                                    <input type="number" class="form-control @error('semester') is-invalid @enderror"
                                        id="semester" name="semester" value="{{ old('semester', $student->semester) }}" min="1" max="8" required>
                                    @error('semester')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Division -->
                            <div class="col-xxl-3 col-lg-4 col-sm-6">
                                <div class="mb-3">
                                    <label for="division" class="form-label">Division</label>
                                    <input type="text" class="form-control @error('division') is-invalid @enderror"
                                        id="division" name="division" value="{{ old('division', $student->division) }}" required>
                                    @error('division')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-12 d-flex gap-2 justify-content-end">
                                <button type="submit" class="btn btn-primary">Update Student</button>
                            </div>
                        </div>
                    </form>

                    <!-- Row ends -->

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
