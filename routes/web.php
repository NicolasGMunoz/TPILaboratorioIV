<?php
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CommissionController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\CourseStudentController;


Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::resource('students', StudentController::class);
Route::resource('subjects', SubjectController::class);
Route::resource('courses', CourseController::class);
Route::resource('commissions', CommissionController::class);
Route::resource('professors', ProfessorController::class);
Route::resource('course_students', CourseStudentController::class);
Route::get('/students/report/pdf', [StudentController::class, 'reportStudentsPDF'])->name('students.report.pdf');

