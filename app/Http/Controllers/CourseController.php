<?php
namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Subject;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(Request $request)
    {
        $query = Course::query();
    
        if ($request->filled('subject_id')) {
            $query->where('subject_id', $request->subject_id);
        }
    
        $courses = $query->with('subject')->get();
        $subjects = Subject::all(); 
        return view('courses.index', compact('courses', 'subjects'));
    }

    public function create()
    {
        $subjects = Subject::all();
        return view('courses.create', compact('subjects'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'subject_id' => 'required|exists:subjects,id',
        ]);

        Course::create($request->all());
        return redirect()->route('courses.index')->with('success', 'Curso creado correctamente');
    }

    public function edit(Course $course)
    {
        $subjects = Subject::all();
        return view('courses.edit', compact('course', 'subjects'));
    }

    public function update(Request $request, Course $course)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'subject_id' => 'required|exists:subjects,id',
        ]);

        $course->update($request->all());
        return redirect()->route('courses.index')->with('success', 'Curso actualizado correctamente');
    }

    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('courses.index')->with('success', 'Curso eliminado correctamente');
    }
}
