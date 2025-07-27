<?php

use Illuminate\Support\Facades\Route;


// ----*---- Student Dashboard Routes ----*----

use App\Http\Controllers\Student\IndexController;
Route::get('/home', [IndexController::class, 'index'])->name('home');

use App\Http\Controllers\Student\AboutController;
Route::get('/about', [AboutController::class, 'index'])->name('about');

use App\Http\Controllers\Student\LoginController;
Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/login/authenticate', [LoginController::class, 'authenticate'])->name('login.authenticate');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

use App\Http\Controllers\Student\ContactController;
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

use App\Http\Controllers\Student\ReportController;
Route::get('/report', [ReportController::class, 'index'])->name('report');
Route::get('download-attendance-report', [ReportController::class, 'downloadAttendanceReport'])->name('download.attendance.report');

use App\Http\Controllers\Student\FacultiesController;
Route::get('/faculties', [FacultiesController::class, 'index'])->name('faculties');

use App\Http\Controllers\Student\TimetableController;
Route::get('/time-table', [TimetableController::class, 'showTimetable'])->name('time-table');

use App\Http\Controllers\Student\AccountController;
Route::get('/account/{id}', [AccountController::class, 'viewAccount'])->name('account.view');
Route::post('/account/update', [AccountController::class, 'updateAccount'])->name('account.update');

use App\Http\Controllers\Student\VerifyController;
Route::get('/verify', [VerifyController::class, 'index'])->name('verify');
Route::post('/verify-enrollment', [VerifyController::class, 'verifyEnrollment'])->name('verify.enrollment');
Route::post('/send-otp', [VerifyController::class, 'sendOTP'])->name('send.otp');


// ----*---- Faculty Dashboard Routes ----*----

use App\Http\Controllers\Faculty\Findexcontroller;
Route::get('/faculty.home', [Findexcontroller::class, 'index'])->name('faculty.home');

use App\Http\Controllers\Faculty\Faboutcontroller;
Route::get('/faculty.about', [Faboutcontroller::class, 'index'])->name('faculty.about');

use App\Http\Controllers\Faculty\Faccountcontroller;
Route::get('/faculty.account', [Faccountcontroller::class, 'index'])->name('faculty.account');

use App\Http\Controllers\Faculty\Fcontactcontroller;
Route::get('/faculty.contact', [Fcontactcontroller::class, 'index'])->name('faculty.contact');

use App\Http\Controllers\Faculty\AttendanceController;
Route::get('/attendance.verify', [AttendanceController::class, 'index'])->name('attendance.verify');
Route::post('/faculty/attendance/fetch', [AttendanceController::class, 'fetchStudents'])->name('faculty.fetchStudents');
Route::post('/faculty/attendance/store', [AttendanceController::class, 'store'])->name('faculty.attendance.store');

use App\Http\Controllers\Faculty\Flogincontroller;
Route::get('/faculty.login', [Flogincontroller::class, 'index'])->name('faculty.login');
Route::post('/flogin/authenticate', [Flogincontroller::class, 'authenticate'])->name('flogin.authenticate');
Route::post('/logout', [Flogincontroller::class, 'logout'])->name('logout');

use App\Http\Controllers\Faculty\Ftimetablecontroller;
Route::get('/faculty.timetable', [Ftimetablecontroller::class, 'index'])->name('faculty.timetable');

use App\Http\Controllers\Faculty\Fverifycontroller;
Route::get('/faculty.verify', [Fverifycontroller::class, 'index'])->name('faculty.verify');
Route::post('/faculty/verify', [Fverifycontroller::class, 'verifyEnrollment'])->name('fverify.enrollment');
Route::post('/fsend-otp', [Fverifycontroller::class, 'sendOTP'])->name('fsend.otp');


// ----*---- Admin Dashboard Routes ----*----

use App\Http\Controllers\Admin\AuthenticationController;
Route::get('/admin', [AuthenticationController::class, 'index'])->name('admin');

use App\Http\Controllers\Admin\AdminController;
Route::get('/admin.dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
Route::post('/admin.dashboard', [AdminController::class, 'index'])->name('admin.dashboard.submit');

use App\Http\Controllers\Admin\FacultyController;
Route::get('/faculty.dashboard', [FacultyController::class, 'faculty'])->name('faculty.dashboard');
Route::get('/facultylist', [FacultyController::class, 'index'])->name('facultylist');
Route::get('/faculty_add', [FacultyController::class, 'add'])->name('faculty_add');
Route::post('/faculty_store', [FacultyController::class, 'store'])->name('faculty.store');
Route::get('/faculty_edit/{id}', [FacultyController::class, 'edit'])->name('faculty_edit');
Route::post('/admin/faculty/update/{faculty}', [FacultyController::class, 'update'])->name('admin.faculty.update');
Route::get('/faculty_view/{id}', [FacultyController::class, 'view'])->name('faculty_view');
Route::post('/faculty_delete/{id}', [FacultyController::class, 'delete'])->name('faculty_delete');

use App\Http\Controllers\Admin\StudentController;
Route::get('/studentlist', [StudentController::class, 'index'])->name('studentlist');
Route::get('/student/edit/{id}', [StudentController::class, 'edit'])->name('student_edit');
Route::post('/admin/student/update/{id}', [StudentController::class, 'update'])->name('admin.student.update');
Route::get('/profile/{id}', [StudentController::class, 'view'])->name('profile.view');
Route::get('/student_add', [StudentController::class, 'add'])->name('student_add');
Route::post('/students/store', [StudentController::class, 'store'])->name('admin.student.store');
Route::delete('/admin/students/delete/{id}', [StudentController::class, 'destroy'])->name('students.destroy');

use App\Http\Controllers\Admin\DepartmentController;
Route::get('/departmentlist', [DepartmentController::class, 'index'])->name('departmentlist');
Route::get('/department/edit/{id}', [DepartmentController::class, 'edit'])->name('department_edit');
Route::post('/admin/department/update/{id}', [DepartmentController::class, 'update'])->name('admin.department.update');
Route::get('/profile/{id}', [DepartmentController::class, 'view'])->name('department.view');
Route::get('/department_add', [DepartmentController::class, 'add'])->name('department_add');
Route::post('/department/store', [DepartmentController::class, 'store'])->name('admin.department.store');
Route::delete('/admin/department/delete/{id}', [DepartmentController::class, 'destroy'])->name('department.destroy');

use App\Http\Controllers\Admin\SubjectController;
Route::get('/subjectlist', [SubjectController::class, 'index'])->name('subjectlist');
Route::get('/subject/edit/{id}', [SubjectController::class, 'edit'])->name('subject_edit');
Route::post('/admin/subject/update/{id}', [SubjectController::class, 'update'])->name('admin.subject.update');
Route::get('/subjectprofile/{id}', [SubjectController::class, 'view'])->name('subject.view');
Route::get('/subject', [SubjectController::class, 'add'])->name('subject_add');
Route::post('/subject/store', [SubjectController::class, 'store'])->name('admin.subject.store');
Route::delete('/admin/subject/delete/{id}', [SubjectController::class, 'destroy'])->name('subject.destroy');

use App\Http\Controllers\Admin\AtimetableController;
Route::get('/time-tablelist', [AtimetableController::class, 'index'])->name('time-tablelist');
Route::get('/time-table_add', [AtimetableController::class, 'add'])->name('time-table_add');
Route::get('/timetable/{id}/edit', [AtimetableController::class, 'edit'])->name('admin.timetable.edit');
Route::post('/timetable/{id}/update', [AtimetableController::class, 'update'])->name('admin.timetable.update');
Route::post('/timetable/{id}/delete', [AtimetableController::class, 'destroy'])->name('admin.timetable.destroy');
Route::get('/timetable/{id}', [AtimetableController::class, 'view'])->name('admin.timetable.view');
Route::post('/admin/timetable/store', [AtimetableController::class, 'store'])->name('admin.timetable.store');
