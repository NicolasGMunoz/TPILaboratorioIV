@extends('layouts.app')

@section('title', 'Inscripciones')

@section('content')
<div class="container">
    <h1 class="mb-4">Inscripciones de alumnos</h1>
    <a href="{{ route('course_students.create') }}" class="btn btn-primary mb-3">Crear Inscripción</a>

    @if ($courseStudents->count())
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Estudiante</th>
                    <th>Curso</th>
                    <th>Comisión</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($courseStudents as $courseStudent)
                    <tr>
                        <td>{{ $courseStudent->id }}</td>
                        <td>{{ $courseStudent->student->nombre ?? 'Sin Estudiante' }}</td>
                        <td>{{ $courseStudent->course->nombre ?? 'Sin Curso' }}</td>
                        <td>{{ $courseStudent->commission->aula ?? 'Sin Comisión' }}</td>
                        <td>
                            <form action="{{ route('course_students.destroy', $courseStudent->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar esta inscripción?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No hay inscripciones registradas.</p>
    @endif
</div>
@endsection
