<?php
namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
 
    public function index(Request $request)
{
    $query = Student::query();

    // Filtra por nombre
    if ($request->filled('nombre')) {
        $query->where('nombre', 'like', '%' . $request->nombre . '%');
    }

    // Filtra por curso
if ($request->filled('curso_id')) {
    $query->whereHas('courses', function ($q) use ($request) {
        $q->where('courses.id', $request->curso_id); 
    });
}


    $students = $query->with('courses')->get();
    $courses = Course::all(); // Para el dropdown de cursos

    return view('students.index', compact('students', 'courses'));
}


    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email',
        ]);

        Student::create($request->all());
        return redirect()->route('students.index')->with('success', 'Estudiante creado correctamente');
    }

    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email,' . $student->id,
        ]);

        $student->update($request->all());
        return redirect()->route('students.index')->with('success', 'Estudiante actualizado correctamente');
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Estudiante eliminado correctamente');
    }
}
