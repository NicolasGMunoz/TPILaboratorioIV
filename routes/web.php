<?php
use App\Http\Controllers\CalculationController;
use Illuminate\Support\Facades\Route;
use App\Models\Student;
use App\Models\Course;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CommissionController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\CourseStudentController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});



Route::get('/calculate', [CalculationController::class, 'showForm'])->name('calculate.form');
Route::post('/calculate', [CalculationController::class, 'calculate'])->name('calculate.result');
Route::resource('students', StudentController::class);
Route::resource('subjects', SubjectController::class);
Route::resource('courses', CourseController::class);
Route::resource('commissions', CommissionController::class);
Route::resource('professors', ProfessorController::class);
Route::resource('course_students', CourseStudentController::class);


Route::get('/saludo', [App\Http\Controllers\mensajesController::class, 'saludo'])->name('saludo.form');


Route::get('/create-student', function() {
     $student = new Student();
     $student->name = 'Juan Pérez';
     $student->email = 'juan.perez@example.com';
     //$student->course_id = 1; // Asegúrate de que el curso con ID 1 exista
     $student->save();
        return 'Estudiante creado exitosamente';
    });


    Route::get('/create-course', function() {
        $course = new Course();
        $course->name = 'Fisica';
        
        $course->save();
           return 'Curso creado exitosamente';
       });
    