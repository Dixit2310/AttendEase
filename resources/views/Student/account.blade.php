<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Account Details</title>

    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />


    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css"
        integrity="sha512-KOV+NejhGWeHIkDAldxnax0iJgm7TjvhqaW9Bm9Hm8ydIDt3T5Z9t5vCniI89IYDK5nBj2fIRlLMqx+FfBYEOQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('Authentication/Account/css/account.css') }}" />

    <style>
        .profile-picture-card.selected {
            border: 2px solid #198754;
            transform: scale(1.05);
            transition: border 0.3s, transform 0.3s;
        }

        .selected-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(25, 135, 84, 0.6);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 2rem;
            opacity: 0;
            transition: opacity 0.3s;
        }

        .profile-picture-card {
            position: relative;
            cursor: pointer;
            border: 2px solid transparent;
            border-radius: 10px;
            overflow: hidden;
            transition: border-color 0.3s, transform 0.3s;
        }

        .profile-picture-card:hover {
            border-color: #0d6efd;
            transform: scale(1.05);
        }

        #saveProfilePictureBtn:disabled {
            cursor: not-allowed;
            opacity: 0.6;
        }

        body {
            background-color: #f8f9fa;
        }

        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        }

        .img-account-profile {
            width: 160px;
            height: 160px;
            object-fit: cover;
            border: 4px solid #0d6efd;
            border-radius: 50%;
        }
    </style>

</head>

<body>
    <div class="container-xl px-4 mt-5">

        <nav class="nav nav-borders mb-4">
            <a class="btn btn-outline-success ms-2" href="{{ route('home') }}">
                <i class="fas fa-arrow-left"></i> Back
            </a>&nbsp;&nbsp;&nbsp;
            {{-- <a class="nav-link active" href="">Profile</a> --}}
            {{-- <a class="nav-link" href="">Change Password</a> --}}
        </nav>

        <div class="row">
            <div class="col-xl-4 mb-4">
                <div class="card mb-4">
                    <div class="card-header bg-primary text-white">
                        Profile Picture
                    </div>
                    <div class="card-body text-center">
                        <img id="profileImage" class="img-account-profile rounded-circle mb-3"
                            src="{{ asset('assets/Authentication/Account/images/' . ($customer->profile_image ?? '6') . '.jpg') }}"
                            alt="Profile Picture" />
                        <br />
                        <button type="button" class="btn btn-primary mt-2" data-bs-toggle="modal"
                            data-bs-target="#profilePictureModal">
                            <i class="fas fa-upload"></i> Change Profile Picture
                        </button>
                    </div>
                </div>


                <div class="card">
                    <div class="card-header bg-danger text-white">
                        Logout
                    </div>
                    <div class="card-body">
                        <p class="mb-3">
                            Logging out will end your current session. You will need to log in again to access your
                            account.
                            If you wish to proceed, please confirm below.
                        </p>

                        <button class="btn btn-danger w-100" type="button" data-bs-toggle="modal"
                            data-bs-target="#logoutModal">
                            <i class="fas fa-sign-out-alt"></i> Logout
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-xl-8">
                <div class="card mb-4">
                    <div class="card-header bg-success text-white d-flex justify-content-between align-items-center">
                        <span>Account Details</span>
                        <i class="fas fa-user-edit"></i>
                    </div>
                    <div class="card-body">

                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert"
                                id="successAlert">
                                <i class="fas fa-check-circle me-2"></i>{{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                        @if (session('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert" id="errorAlert">
                                <i class="bi bi-exclamation-triangle me-2"></i>{{ session('error') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('account.update') }}">
                            @csrf
                            <div class="mb-4">
                                <label class="form-label" for="full_name">Full Name</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    <input class="form-control form-control-lg @error('full_name') is-invalid @enderror"
                                        id="full_name" name="full_name" type="text"
                                        value="{{ old('full_name', $student->full_name) }}"
                                        placeholder="Enter your full name" required />
                                    @error('full_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <label class="form-label" for="email">Email</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                        <input class="form-control form-control-lg @error('email') is-invalid @enderror"
                                            id="email" name="email" type="email"
                                            value="{{ old('email', $student->email) }}" />
                                        @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="enrollment">Enrollment Number</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-id-badge"></i></span>
                                        <input class="form-control form-control-lg" id="enrollment" name="enrollment"
                                            type="text" value="{{ $student->enrollment }}" readonly />
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <label class="form-label" for="phone">Phone Number</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                        <input
                                            class="form-control form-control-lg @error('phone') is-invalid @enderror"
                                            id="phone" name="phone" type="tel"
                                            value="{{ old('phone', $student->phone) }}"
                                            placeholder="Enter your phone number" required />
                                        @error('phone')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="gender">Gender</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-venus-mars"></i></span>
                                        <input
                                            class="form-control form-control-lg @error('gender') is-invalid @enderror"
                                            id="gender" name="gender" type="text"
                                            value="{{ old('gender', $student->gender) }}"
                                            readonly />
                                        @error('gender')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label class="form-label" for="dob">Date of Birth</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                                    <input class="form-control form-control-lg @error('dob') is-invalid @enderror"
                                        id="dob" name="dob" type="date"
                                        value="{{ old('dob', $student->dob) }}" required />
                                    @error('dob')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <label class="form-label" for="department">Department</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-building"></i></span>
                                        <input
                                            class="form-control form-control-lg @error('department') is-invalid @enderror"
                                            id="department" name="department" type="text"
                                            value="{{ old('department', $student->department->department_name ?? 'N/A') }}"
                                            placeholder="Enter your department" readonly />
                                        @error('department')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label" for="semester">Semester</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-book"></i></span>
                                        <input
                                            class="form-control form-control-lg @error('semester') is-invalid @enderror"
                                            id="semester" name="semester" type="number" min="1"
                                            max="8" value="{{ old('semester', $student->semester) }}"
                                            required, readonly />
                                        @error('semester')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label class="form-label" for="division">Division</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-th-large"></i></span>
                                    <input class="form-control form-control-lg @error('division') is-invalid @enderror"
                                        id="division" name="division" type="text"
                                        value="{{ old('division', $student->division) }}"
                                        placeholder="Enter your division" required, readonly />
                                    @error('division')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="d-grid">
                                <button class="btn btn-success btn-lg" type="submit"><i
                                        class="fas fa-save me-2"></i> Save Changes</button>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>

    </div>


    <div class="modal fade" id="profilePictureModal" tabindex="-1" aria-labelledby="profilePictureModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Choose Profile Picture</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row g-3">
                        @foreach ([1, 2, 3, 4, 6, 7, 8, 9] as $i)
                            <div class="col-4 col-md-3">
                                <div class="card profile-picture-card"
                                    onclick="selectProfilePicture(this, '{{ asset('assets/Authentication/Account/images/' . $i . '.jpg') }}')">
                                    <img src="{{ asset('assets/Authentication/Account/images/' . $i . '.jpg') }}"
                                        class="card-img-top profile-picture-option"
                                        alt="Profile {{ $i }}">
                                    <div class="selected-overlay">
                                        <i class="bi bi-check-circle-fill"></i>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="saveProfilePictureBtn"
                        onclick="saveProfilePicture()" disabled>
                        Save Changes
                    </button>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title" id="logoutModalLabel">Confirm Logout</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to log out?</p>
                </div>
                <div class="modal-footer">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-danger"><i class="fas fa-sign-out-alt"></i> Yes,
                            Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        let selectedProfileImageSrc = '';
        let isDebouncing = false;

        function selectProfilePicture(cardElement) {
            if (isDebouncing) return;
            isDebouncing = true;

            const allCards = document.querySelectorAll('.profile-picture-card');
            allCards.forEach(card => {
                card.classList.remove('selected');
                const overlay = card.querySelector('.selected-overlay');
                overlay.style.opacity = '0';
            });

            cardElement.classList.add('selected');

            const imgElement = cardElement.querySelector('.profile-picture-option');
            selectedProfileImageSrc = imgElement.src;

            const selectedOverlay = cardElement.querySelector('.selected-overlay');
            selectedOverlay.style.opacity = '1';

            document.getElementById('saveProfilePictureBtn').disabled = false;

            setTimeout(() => {
                isDebouncing = false;
            }, 300);
        }

        function saveProfilePicture() {
            if (selectedProfileImageSrc) {
                const profileImage = document.getElementById("profileImage");
                profileImage.src = selectedProfileImageSrc;

                const allCards = document.querySelectorAll('.profile-picture-card');
                allCards.forEach(card => {
                    card.classList.remove('selected');
                    const overlay = card.querySelector('.selected-overlay');
                    overlay.style.opacity = '0';
                });

                document.getElementById('saveProfilePictureBtn').disabled = true;

                const profileModalElement = document.getElementById("profilePictureModal");
                const profileModal = bootstrap.Modal.getInstance(profileModalElement);
                profileModal.hide();
            }
        }
    </script>

    <script>
        setTimeout(() => {
            const successAlert = document.getElementById('successAlert');
            const errorAlert = document.getElementById('errorAlert');
            if (successAlert) {
                successAlert.classList.remove('show');
                successAlert.classList.add('fade');
                setTimeout(() => {
                    successAlert.remove();
                }, 150);
            }
            if (errorAlert) {
                errorAlert.classList.remove('show');
                errorAlert.classList.add('fade');
                setTimeout(() => {
                    errorAlert.remove();
                }, 150);
            }
        }, 4000);
    </script>

    <style>
        .form-label {
            font-weight: bold;
            color: #333;
            font-size: 1rem;
        }

        .form-control {
            font-size: 1rem;
            padding: 1rem;
            border-radius: 0.5rem;
            font-weight: 500;
        }
    </style>

</body>

</html>
