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
                    <img src="Admin\assets\images\user.jpg" class="img-shadow img-3x me-3 rounded-5"
                        alt="AttendEase Admin Templates">
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
                            <a href="{{ url('admin.dashboard') }}">
                                <i class="ri-home-6-line"></i>
                                <span class="menu-text">Student Dashboard</span>
                            </a>
                        </li>
                        <li class="active current-page">
                            <a href="{{ url('facultylist') }}">
                                <i class="ri-nurse-line"></i>
                                <span class="menu-text">Faculty List</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('studentlist') }}">
                                <i class="ri-user-line" style="font-size: 20px;"></i> <!-- Changed Icon -->
                                <span class="menu-text">Student List</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('departmentlist') }}">
                                <i class="ri-building-line" style="font-size: 20px;"></i> <!-- Changed Icon -->
                                <span class="menu-text">Department</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('subjectlist') }}">
                                <i class="ri-book-line" style="font-size: 20px;"></i> <!-- Changed Icon -->
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
                            <a href="index.html">Home</a>
                        </li>
                        <li class="breadcrumb-item text-primary" aria-current="page">
                            Add Faculties
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
                    <form action="{{ route('faculty.store') }}" method="POST">
                        @csrf
                        <div class="row gx-3">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title">Add Faculties</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="row gx-3">
                                            <div class="col-sm-12">
                                                <div class="bg-light rounded-2 px-3 py-2 mb-3">
                                                    <h6 class="m-0">Basic Information</h6>
                                                </div>
                                            </div>

                                            <!-- Full Name -->
                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Full Name <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" name="full_name" class="form-control"
                                                        value="{{ old('full_name') }}" placeholder="Enter Full Name">
                                                    @error('full_name')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>

                                            <!-- Faculty Code -->
                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Faculty Code <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" name="faculty_code" class="form-control"
                                                        value="{{ old('faculty_code') }}"
                                                        placeholder="Enter Faculty Code">
                                                    @error('faculty_code')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>

                                            <!-- Email Address -->
                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Email Address <span
                                                            class="text-danger">*</span></label>
                                                    <input type="email" name="email" class="form-control"
                                                        value="{{ old('email') }}"
                                                        placeholder="Enter Email Address">
                                                    @error('email')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>

                                            <!-- Phone Number -->
                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Phone Number <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" name="phone_number" class="form-control"
                                                        value="{{ old('phone_number') }}"
                                                        placeholder="Enter Phone Number">
                                                    @error('phone_number')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>

                                            <!-- Date of Birth -->
                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Date of Birth <span
                                                            class="text-danger">*</span></label>
                                                    <input type="date" name="date_of_birth" class="form-control"
                                                        value="{{ old('date_of_birth') }}">
                                                    @error('date_of_birth')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>

                                            <!-- Gender -->
                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Gender <span
                                                            class="text-danger">*</span></label>
                                                    <div>
                                                        <input type="radio" name="gender" value="Male"
                                                            {{ old('gender') == 'Male' ? 'checked' : '' }}> Male
                                                        <input type="radio" name="gender" value="Female"
                                                            {{ old('gender') == 'Female' ? 'checked' : '' }}> Female
                                                        <input type="radio" name="gender" value="Other"
                                                            {{ old('gender') == 'Other' ? 'checked' : '' }}> Other
                                                    </div>
                                                    @error('gender')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-sm-12">
                                                <div class="bg-light rounded-2 px-3 py-2 mb-3">
                                                    <h6 class="m-0">Professional Details</h6>
                                                </div>
                                            </div>

                                            <!-- Designation -->
                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Designation <span
                                                            class="text-danger">*</span></label>
                                                    <select class="form-select" name="designation">
                                                        <option value="">Select</option>
                                                        <option value="Professor"
                                                            {{ old('designation') == 'Professor' ? 'selected' : '' }}>
                                                            Professor</option>
                                                        <option value="Assistant Professor"
                                                            {{ old('designation') == 'Assistant Professor' ? 'selected' : '' }}>
                                                            Assistant Professor</option>
                                                    </select>
                                                    @error('designation')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>

                                            <!-- Department -->
                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Department <span
                                                            class="text-danger">*</span></label>
                                                    <select class="form-select" name="department_id">
                                                        <option value="">Select</option>
                                                        @foreach ($departments as $department)
                                                            <option value="{{ $department->department_id }}"
                                                                {{ old('department_id') == $department->department_id ? 'selected' : '' }}>
                                                                {{ $department->department_name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('department_id')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>

                                            <!-- Submit Button -->
                                            <div class="col-sm-12">
                                                <div class="d-flex gap-2 justify-content-end">
                                                    <a href="#" class="btn btn-outline-secondary">Cancel</a>
                                                    <button type="submit" class="btn btn-primary">Add
                                                        Faculty</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

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
    <!--  jQuery first, then Bootstrap Bundle JS -->
    <script src="Admin/assets/js/jquery.min.js"></script>
    <script src="Admin/assets/js/bootstrap.bundle.min.js"></script>
    <script src="Admin/assets/js/moment.min.js"></script>

    <!-- *************
   ************ Vendor Js Files *************
  ************* -->

    <!-- Overlay Scroll JS -->
    <script src="Admin/assets/vendor/overlay-scroll/jquery.overlayScrollbars.min.js"></script>
    <script src="Admin/assets/vendor/overlay-scroll/custom-scrollbar.js"></script>

    <!-- Custom JS files -->
    <script src="Admin/assets/js/custom.js"></script>
</body>

</html>
