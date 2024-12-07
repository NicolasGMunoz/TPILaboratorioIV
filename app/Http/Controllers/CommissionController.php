<?php 
namespace App\Http\Controllers;

use App\Models\Commission;
use App\Models\Course;
use Illuminate\Http\Request;

class CommissionController extends Controller
{
    public function index(Request $request)
{
    $query = Commission::query();

    // Filtrar por curso
    if ($request->filled('course_id')) {
        $query->where('course_id', $request->course_id);
    }

    // Filtrar por horario
    if ($request->filled('horario')) {
        $query->where('horario', 'like', '%' . $request->horario . '%');
    }

    $commissions = $query->with('course')->get();
    $courses = Course::all(); // Para poblar el dropdown de cursos

    return view('commissions.index', compact('commissions', 'courses'));
}


    public function create()
    {
        $courses = Course::all();
        return view('commissions.create', compact('courses'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'aula' => 'required|string|max:255',
            'horario' => 'required|string|max:255',
            'course_id' => 'required|exists:courses,id',
        ]);

        Commission::create($request->all());
        return redirect()->route('commissions.index')->with('success', 'Comisión creada correctamente');
    }

    public function edit(Commission $commission)
    {
        $courses = Course::all();
        return view('commissions.edit', compact('commission', 'courses'));
    }

    public function update(Request $request, Commission $commission)
    {
        $request->validate([
            'aula' => 'required|string|max:255',
            'horario' => 'required|string|max:255',
            'course_id' => 'required|exists:courses,id',
        ]);

        $commission->update($request->all());
        return redirect()->route('commissions.index')->with('success', 'Comisión actualizada correctamente');
    }

    public function destroy(Commission $commission)
    {
        $commission->delete();
        return redirect()->route('commissions.index')->with('success', 'Comisión eliminada correctamente');
    }
}
