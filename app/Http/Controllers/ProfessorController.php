<?php
namespace App\Http\Controllers;

use App\Models\Professor;
use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    public function index(Request $request)
{
    $query = Professor::query();

    // Filtrar por nombre
    if ($request->filled('nombre')) {
        $query->where('nombre', 'like', '%' . $request->nombre . '%');
    }

    $professors = $query->get();

    return view('professors.index', compact('professors'));
}

    public function create()
    {
        return view('professors.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
        ]);

        Professor::create($request->all());
        return redirect()->route('professors.index')->with('success', 'Profesor creado correctamente');
    }

    public function edit(Professor $professor)
    {
        return view('professors.edit', compact('professor'));
    }

    public function update(Request $request, Professor $professor)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
        ]);

        $professor->update($request->all());
        return redirect()->route('professors.index')->with('success', 'Profesor actualizado correctamente');
    }

    public function destroy(Professor $professor)
    {
        $professor->delete();
        return redirect()->route('professors.index')->with('success', 'Profesor eliminado correctamente');
    }
}
