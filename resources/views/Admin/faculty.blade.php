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
              <li class="active current-page">
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
                Faculty Dashboard
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
                <div class="col-xxl-12 col-sm-12">
                  <div class="card mb-3 bg-1">
                    <div class="card-body">
                      <div class="py-4 px-3 text-white">
                        <div class="row align-items-end">
                            <!-- Department Dropdown -->
                            <div class="col-xxl-3 col-lg-3 col-sm-6">
                              <div class="mb-3">
                                <label class="form-label" for="department"> <b>Department</b> <span class="text-danger">*</span></label>
                                <select class="form-select" id="department">
                                    <option value="0">Select</option>
                                    <option value="1">BCA</option>
                                    <option value="2">Computer Science</option>
                                    <option value="3">B.Tech</option>
                                    <option value="4">B.sc</option>
                                </select>
                              </div>
                            </div>

                            <!-- Semester Dropdown -->
                            <div class="col-xxl-3 col-lg-3 col-sm-6">
                              <div class="mb-3">
                                <label class="form-label" for="semester"> <b>Semester</b> <span class="text-danger">*</span></label>
                                <select class="form-select" id="semester">
                                    <option value="0">Select</option>
                                    <option value="1">Semester 1</option>
                                    <option value="2">Semester 2</option>
                                    <option value="3">Semester 3</option>
                                    <option value="4">Semester 4</option>
                                    <option value="5">Semester 5</option>
                                    <option value="6">Semester 6</option>
                                    <option value="7">Semester 7</option>
                                    <option value="8">Semester 8</option>
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

                        <div class="mt-4 d-flex gap-3">
                            <div class="d-flex align-items-center">
                              <div class="icon-box lg bg-arctic rounded-3 me-3">
                                <i class="ri-group-line fs-4" style="font-size: 20px;"></i> <!-- Changed Icon -->
                              </div>
                              <div class="d-flex flex-column">
                                <h2 class="m-0 lh-1">9</h2>
                                <p class="m-0">Total Faculties</p>
                              </div>
                            </div>
                            <div class="d-flex align-items-center">
                              <div class="icon-box lg bg-lime rounded-3 me-3">
                                <i class="ri-user-follow-line fs-4" style="font-size: 20px;"></i> <!-- Changed Icon -->
                              </div>
                              <div class="d-flex flex-column">
                                <h2 class="m-0 lh-1">7</h2>
                                <p class="m-0">Present Faculties</p>
                              </div>
                            </div>
                            <div class="d-flex align-items-center">
                              <div class="icon-box lg bg-peach rounded-3 me-3">
                                <i class="ri-user-unfollow-line fs-4" style="font-size: 20px;"></i> <!-- Changed Icon -->
                              </div>
                              <div class="d-flex flex-column">
                                <h2 class="m-0 lh-1">2</h2>
                                <p class="m-0">Absent Faculties</p>
                              </div>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            <!-- Row ends -->

            <!-- Row starts -->
            <div class="row gx-3">
              <div class="col-xxl-6 col-sm-12">
                <div class="card mb-3">
                  <div class="card-header">
                    <h5 class="card-title">Available Doctors</h5>
                  </div>
                  <div class="card-body">
                    <div id="carouselAvailableDocs" class="carousel slide carousel-fade" data-bs-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="4000">
                          <div class="grid gap-2 p-1">
                            <div class="g-col-6">
                              <div class="border rounded-2 p-3 mh-100">
                                <div class="d-flex align-items-start">
                                  <img src="assets/images/user1.png" class="img-4x rounded-5" alt="Doctor Dashboard">
                                  <div class="ms-3">
                                    <h6 class="mb-1">Gilbert Sandoval</h6>
                                    <p class="mb-1">Neurologist</p>
                                    <div class="d-flex align-items-center">
                                      <div class="rating-stars-sm">
                                        <div class="readonly5"></div>
                                      </div>
                                      <span class="ms-1 lh-1">5</span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="g-col-6">
                              <div class="border rounded-2 p-3 mh-100">
                                <div class="d-flex align-items-start">
                                  <img src="assets/images/user2.png" class="img-4x rounded-5" alt="Doctor Dashboard">
                                  <div class="ms-3">
                                    <h6 class="mb-1">Gilbert Sandoval</h6>
                                    <p class="mb-1">Radiologist</p>
                                    <div class="d-flex align-items-center">
                                      <div class="rating-stars-sm">
                                        <div class="readonly4"></div>
                                      </div>
                                      <span class="ms-1 lh-1">4</span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="4000">
                          <div class="grid gap-2 p-1">
                            <div class="g-col-6">
                              <div class="border rounded-2 p-3 mh-100">
                                <div class="d-flex align-items-start">
                                  <img src="assets/images/user.png" class="img-4x rounded-5" alt="Doctor Dashboard">
                                  <div class="ms-3">
                                    <h6 class="mb-1">George Bailey</h6>
                                    <p class="mb-1">Dentist</p>
                                    <div class="d-flex align-items-center">
                                      <div class="rating-stars-sm">
                                        <div class="readonly4"></div>
                                      </div>
                                      <span class="ms-1 lh-1">4</span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="g-col-6">
                              <div class="border rounded-2 p-3 mh-100">
                                <div class="d-flex align-items-start">
                                  <img src="assets/images/user3.png" class="img-4x rounded-5" alt="Doctor Dashboard">
                                  <div class="ms-3">
                                    <h6 class="mb-1">Amelia Bruklin</h6>
                                    <p class="mb-1">Therapist</p>
                                    <div class="d-flex align-items-center">
                                      <div class="rating-stars-sm">
                                        <div class="readonly3"></div>
                                      </div>
                                      <span class="ms-1 lh-1">3.5</span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="4000">
                          <div class="grid gap-2 p-1">
                            <div class="g-col-6">
                              <div class="border rounded-2 p-3 mh-100">
                                <div class="d-flex align-items-start">
                                  <img src="assets/images/user4.png" class="img-4x rounded-5" alt="Doctor Dashboard">
                                  <div class="ms-3">
                                    <h6 class="mb-1">Bernardo James</h6>
                                    <p class="mb-1">Pediatrics</p>
                                    <div class="d-flex align-items-center">
                                      <div class="rating-stars-sm">
                                        <div class="readonly4"></div>
                                      </div>
                                      <span class="ms-1 lh-1">4</span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="g-col-6">
                              <div class="border rounded-2 p-3 mh-100">
                                <div class="d-flex align-items-start">
                                  <img src="assets/images/user5.png" class="img-4x rounded-5" alt="Doctor Dashboard">
                                  <div class="ms-3">
                                    <h6 class="mb-1">Bshton Cozei</h6>
                                    <p class="mb-1">Gynecologist</p>
                                    <div class="d-flex align-items-center">
                                      <div class="rating-stars-sm">
                                        <div class="readonly5"></div>
                                      </div>
                                      <span class="ms-1 lh-1">5</span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="carousel-custom-btns">
                        <button class="carousel-control-prev btn text-danger" type="button"
                          data-bs-target="#carouselAvailableDocs" data-bs-slide="prev">
                          <i class="ri-arrow-left-s-line fs-2 lh-1"></i>
                        </button>
                        <button class="carousel-control-next btn text-danger" type="button"
                          data-bs-target="#carouselAvailableDocs" data-bs-slide="next">
                          <i class="ri-arrow-right-s-line fs-2 lh-1"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xxl-6 col-sm-12">
                <div class="card mb-3">
                  <div class="card-header">
                    <h5 class="card-title">Upcoming Surgeries</h5>
                  </div>
                  <div class="card-body">
                    <div id="carouselSurgeries" class="carousel slide carousel-fade" data-bs-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="3000">
                          <div class="grid gap-2 p-1">
                            <div class="g-col-6">
                              <div class="border rounded-2 p-3 mh-100">
                                <div class="d-flex align-items-start">
                                  <div class="icon-box lg rounded-3 bg-primary-subtle text-primary">
                                    <div class="d-flex flex-column text-center">
                                      <p class="m-0">Thu</p>
                                      <h3 class="m-0">23</h3>
                                    </div>
                                  </div>
                                  <div class="ms-3">
                                    <h6 class="mb-1">Amelia Bruklin</h6>
                                    <p class="mb-1">Neurologist</p>
                                    <span class="badge bg-primary">2:30 PM</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="g-col-6">
                              <div class="border rounded-2 p-3 mh-100">
                                <div class="d-flex align-items-start">
                                  <div class="icon-box lg rounded-3 bg-success-subtle text-success">
                                    <div class="d-flex flex-column text-center">
                                      <p class="m-0">Sat</p>
                                      <h3 class="m-0">25</h3>
                                    </div>
                                  </div>
                                  <div class="ms-3">
                                    <h6 class="mb-1">Bshton Cozei</h6>
                                    <p class="mb-1">Surgen</p>
                                    <span class="badge bg-success">5:00 PM</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="3000">
                          <div class="grid gap-2 p-1">
                            <div class="g-col-6">
                              <div class="border rounded-2 p-3 mh-100">
                                <div class="d-flex align-items-start">
                                  <div class="icon-box lg rounded-3 bg-danger-subtle text-danger">
                                    <div class="d-flex flex-column text-center">
                                      <p class="m-0">Mon</p>
                                      <h3 class="m-0">27</h3>
                                    </div>
                                  </div>
                                  <div class="ms-3">
                                    <h6 class="mb-1">Smith White</h6>
                                    <p class="mb-1">Oncologist</p>
                                    <span class="badge bg-danger">10:30 AM</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="g-col-6">
                              <div class="border rounded-2 p-3 mh-100">
                                <div class="d-flex align-items-start">
                                  <div class="icon-box lg rounded-3 bg-info-subtle text-info">
                                    <div class="d-flex flex-column text-center">
                                      <p class="m-0">Tue</p>
                                      <h3 class="m-0">28</h3>
                                    </div>
                                  </div>
                                  <div class="ms-3">
                                    <h6 class="mb-1">Bernardo James</h6>
                                    <p class="mb-1">Radiologist</p>
                                    <span class="badge bg-info">3:30 PM</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="3000">
                          <div class="grid gap-2 p-1">
                            <div class="g-col-6">
                              <div class="border rounded-2 p-3 mh-100">
                                <div class="d-flex align-items-start">
                                  <div class="icon-box lg rounded-3 bg-warning-subtle text-warning">
                                    <div class="d-flex flex-column text-center">
                                      <p class="m-0">Fri</p>
                                      <h3 class="m-0">29</h3>
                                    </div>
                                  </div>
                                  <div class="ms-3">
                                    <h6 class="mb-1">George Bailey</h6>
                                    <p class="mb-1">Cardiologist</p>
                                    <span class="badge bg-warning">6:30 AM</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="g-col-6">
                              <div class="border rounded-2 p-3 mh-100">
                                <div class="d-flex align-items-start">
                                  <div class="icon-box lg rounded-3 bg-primary-subtle text-primary">
                                    <div class="d-flex flex-column text-center">
                                      <p class="m-0">Sat</p>
                                      <h3 class="m-0">30</h3>
                                    </div>
                                  </div>
                                  <div class="ms-3">
                                    <h6 class="mb-1">Taylor Melon</h6>
                                    <p class="mb-1">Gynecologist</p>
                                    <span class="badge bg-primary">4:30 PM</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="carousel-custom-btns">
                        <button class="carousel-control-prev btn text-danger" type="button"
                          data-bs-target="#carouselSurgeries" data-bs-slide="prev">
                          <i class="ri-arrow-left-s-line fs-2 lh-1"></i>
                        </button>
                        <button class="carousel-control-next btn text-danger" type="button"
                          data-bs-target="#carouselSurgeries" data-bs-slide="next">
                          <i class="ri-arrow-right-s-line fs-2 lh-1"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Row ends -->

            <!-- Row starts -->
            <div class="row gx-3">
              <div class="col-sm-12">
                <div class="card mb-3">
                  <div class="card-header">
                    <h5 class="card-title">Appointments</h5>
                  </div>
                  <div class="card-body">

                    <!-- Table starts -->
                    <div class="table-outer">
                      <div class="table-responsive">
                        <table class="table m-0 align-middle">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>Patient Name</th>
                              <th>Age</th>
                              <th>Consulting Doctor</th>
                              <th>Department</th>
                              <th>Date</th>
                              <th>Time</th>
                              <th>Disease</th>
                              <th>Actions</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>001</td>
                              <td>
                                Deena Cooley
                              </td>
                              <td>65</td>
                              <td>
                                <img src="assets/images/user.png" class="img-shadow img-2x rounded-5 me-1"
                                  alt="AttendEase Admin Template">
                                Vicki Walsh
                              </td>
                              <td>Surgeon</td>
                              <td>05/23/2024</td>
                              <td>9:30AM</td>
                              <td>Diabeties</td>
                              <td>
                                <div class="d-inline-flex gap-1">
                                  <button class="btn btn-success btn-sm" data-bs-toggle="tooltip"
                                    data-bs-placement="top" data-bs-title="Accepted">
                                    <i class="ri-checkbox-circle-line"></i>
                                  </button>
                                  <button class="btn btn-outline-danger btn-sm" data-bs-toggle="tooltip"
                                    data-bs-placement="top" data-bs-title="Reject" disabled>
                                    <i class="ri-close-circle-line"></i>
                                  </button>
                                  <a href="edit-appointment.html" class="btn btn-outline-info btn-sm"
                                    data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit Appointment">
                                    <i class="ri-edit-box-line"></i>
                                  </a>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>002</td>
                              <td>
                                Jerry Wilcox
                              </td>
                              <td>73</td>
                              <td>
                                <img src="assets/images/user1.png" class="img-shadow img-2x rounded-5 me-1"
                                  alt="AttendEase Admin Template">
                                April Gallegos
                              </td>
                              <td>Gynecologist</td>
                              <td>05/23/2024</td>
                              <td>9:45AM</td>
                              <td>Fever</td>
                              <td>
                                <div class="d-inline-flex gap-1">
                                  <button class="btn btn-outline-success btn-sm" data-bs-toggle="tooltip"
                                    data-bs-placement="top" data-bs-title="Accept" disabled>
                                    <i class="ri-checkbox-circle-line"></i>
                                  </button>
                                  <button class="btn btn-danger btn-sm" data-bs-toggle="tooltip" data-bs-placement="top"
                                    data-bs-title="Rejected">
                                    <i class="ri-close-circle-line"></i>
                                  </button>
                                  <a href="edit-appointment.html" class="btn btn-outline-info btn-sm"
                                    data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit Appointment">
                                    <i class="ri-edit-box-line"></i>
                                  </a>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>003</td>
                              <td>
                                Eduardo Kramer
                              </td>
                              <td>84</td>
                              <td>
                                <img src="assets/images/user2.png" class="img-shadow img-2x rounded-5 me-1"
                                  alt="AttendEase Admin Template">
                                Basil Frost
                              </td>
                              <td>Psychiatrists</td>
                              <td>05/23/2024</td>
                              <td>10:00AM</td>
                              <td>Cold</td>
                              <td>
                                <div class="d-inline-flex gap-1">
                                  <button class="btn btn-outline-success btn-sm" data-bs-toggle="tooltip"
                                    data-bs-placement="top" data-bs-title="Accept">
                                    <i class="ri-checkbox-circle-line"></i>
                                  </button>
                                  <button class="btn btn-outline-danger btn-sm" data-bs-toggle="tooltip"
                                    data-bs-placement="top" data-bs-title="Reject">
                                    <i class="ri-close-circle-line"></i>
                                  </button>
                                  <a href="edit-appointment.html" class="btn btn-outline-info btn-sm"
                                    data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit Appointment">
                                    <i class="ri-edit-box-line"></i>
                                  </a>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>004</td>
                              <td>
                                Jason Compton
                              </td>
                              <td>56</td>
                              <td>
                                <img src="assets/images/user4.png" class="img-shadow img-2x rounded-5 me-1"
                                  alt="AttendEase Admin Template">
                                Nannie Guerrero
                              </td>
                              <td>Urologist</td>
                              <td>05/23/2024</td>
                              <td>10:15AM</td>
                              <td>Prostate</td>
                              <td>
                                <div class="d-inline-flex gap-1">
                                  <button class="btn btn-outline-success btn-sm" data-bs-toggle="tooltip"
                                    data-bs-placement="top" data-bs-title="Accept">
                                    <i class="ri-checkbox-circle-line"></i>
                                  </button>
                                  <button class="btn btn-outline-danger btn-sm" data-bs-toggle="tooltip"
                                    data-bs-placement="top" data-bs-title="Reject">
                                    <i class="ri-close-circle-line"></i>
                                  </button>
                                  <a href="edit-appointment.html" class="btn btn-outline-info btn-sm"
                                    data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit Appointment">
                                    <i class="ri-edit-box-line"></i>
                                  </a>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>005</td>
                              <td>
                                Emmitt Bryan
                              </td>
                              <td>49</td>
                              <td>
                                <img src="assets/images/user5.png" class="img-shadow img-2x rounded-5 me-1"
                                  alt="AttendEase Admin Template">
                                Daren Andrade
                              </td>
                              <td>Cardiology</td>
                              <td>05/23/2024</td>
                              <td>10:30AM</td>
                              <td>Asthma</td>
                              <td>
                                <div class="d-inline-flex gap-1">
                                  <button class="btn btn-outline-success btn-sm" data-bs-toggle="tooltip"
                                    data-bs-placement="top" data-bs-title="Accept">
                                    <i class="ri-checkbox-circle-line"></i>
                                  </button>
                                  <button class="btn btn-outline-danger btn-sm" data-bs-toggle="tooltip"
                                    data-bs-placement="top" data-bs-title="Reject">
                                    <i class="ri-close-circle-line"></i>
                                  </button>
                                  <a href="edit-appointment.html" class="btn btn-outline-info btn-sm"
                                    data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit Appointment">
                                    <i class="ri-edit-box-line"></i>
                                  </a>
                                </div>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <!-- Table ends -->
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

    <!-- Apex Charts -->
    <script src="assets/vendor/apex/apexcharts.min.js"></script>
    <script src="assets/vendor/apex/custom/dashboard2/activity.js"></script>
    <script src="assets/vendor/apex/custom/dashboard2/income.js"></script>
    <script src="assets/vendor/apex/custom/dashboard2/orders.js"></script>

    <!-- Raty JS -->
    <script src="assets/vendor/rating/raty.js"></script>
    <script src="assets/vendor/rating/raty-custom.js"></script>

    <!-- Custom JS files -->
    <script src="assets/js/custom.js"></script>
  </body>

</html>
