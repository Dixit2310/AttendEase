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
                      <li class="active current-page">
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
                            Department List
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
                                <div class="card-header d-flex align-items-center justify-content-between">
                                    <h5 class="card-title">Department List</h5>
                                    <a href="{{ url('department_add') }}" class="btn btn-primary ms-auto">Add Department</a>
                                </div>
                                <div class="card-body">

                                    <!-- Table starts -->
                                    @if (session('success'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            {{ session('success') }}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @endif

                                    @if (session('error'))
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            {{ session('error') }}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @endif


                                    <script>
                                        // Hide success message after 5 seconds
                                        setTimeout(function() {
                                            let successMessage = document.getElementById('success-message');
                                            if (successMessage) {
                                                successMessage.style.transition = "opacity 0.5s ease";
                                                successMessage.style.opacity = "0";
                                                setTimeout(() => successMessage.remove(), 300); // Remove from DOM after fade-out
                                            }
                                        }, 5000);
                                    </script>


                                    <div class="table-responsive">
                                        <table id="basicExample" class="table truncate m-0 align-middle">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Department Name</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($departments as $index => $department)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $department->department_name }}</td>
                                                        <td>
                                                            <div class="d-inline-flex gap-1">
                                                                <!-- Delete Button inside the table -->
                                                                <button type="button"
                                                                    class="btn btn-outline-danger btn-sm"
                                                                    data-bs-toggle="modal" data-bs-target="#delRow"
                                                                    onclick="setDeleteDepartmentId({{ $department->department_id }})">
                                                                    <i class="ri-delete-bin-line"></i>
                                                                </button>
                                                                <a href="{{ route('department_edit', ['id' => $department->department_id]) }}"
                                                                    class="btn btn-outline-success btn-sm">
                                                                    <i class="ri-edit-box-line"></i>
                                                                </a>
                                                                <a href="{{ route('department.view', ['id' => $department->department_id]) }}"
                                                                    class="btn btn-outline-info btn-sm">
                                                                    <i class="ri-eye-line"></i>
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>


                                    <!-- Table ends -->

                                    <!-- Delete Confirmation Modal -->
                                    <div class="modal fade" id="delRow" tabindex="-1"
                                        aria-labelledby="delRowLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-sm">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="delRowLabel">Confirm</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure you want to delete this department from the list?
                                                </div>
                                                <div class="modal-footer">
                                                    <div class="d-flex justify-content-end gap-2">
                                                        <button class="btn btn-outline-secondary"
                                                            data-bs-dismiss="modal" aria-label="Close">No</button>
                                                        <form id="deleteStudentForm" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger">Yes</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
    <script src="Admin/assets/js/bootstrap.bundle.min.js"></script>
    <script src="Admin/assets/js/moment.min.js"></script>
    <script src="Admin/assets/js/jquery.min.js"></script>

    <!-- *************
   ************ Vendor Js Files *************
  ************* -->

    <!-- Overlay Scroll JS -->
    <script src="Admin/assets/vendor/overlay-scroll/jquery.overlayScrollbars.min.js"></script>
    <script src="Admin/assets/vendor/overlay-scroll/custom-scrollbar.js"></script>

    <!-- Data Tables -->
    <script src="Admin/assets/vendor/datatables/dataTables.min.js"></script>
    <script src="Admin/assets/vendor/datatables/dataTables.bootstrap.min.js"></script>
    <script src="Admin/assets/vendor/datatables/custom/custom-datatables.js"></script>

    <!-- Custom JS files -->
    <script src="Admin/assets/js/custom.js"></script>

    <!-- JavaScript to Set Delete Student ID -->
    <script>
        function setDeleteDepartmentId(departmentId) {
            let form = document.getElementById('deleteStudentForm');
            form.action = "{{ url('admin/department/delete') }}/" + departmentId;
        }
    </script>
</body>

</html>
