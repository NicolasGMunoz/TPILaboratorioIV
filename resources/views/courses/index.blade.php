@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Lista de Cursos</h1>

    <form method="GET" action="{{ route('courses.index') }}" class="mb-4">
    <div class="row">
        <div class="col-md-10">
            <select name="subject_id" class="form-control">
                <option value="">-- Filtrar por Materia --</option>
                @foreach($subjects as $subject)
                    <option value="{{ $subject->id }}" {{ request('subject_id') == $subject->id ? 'selected' : '' }}>
                        {{ $subject->nombre }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="col-md-2">
            <button type="submit" class="btn btn-primary">Filtrar</button>
        </div>
    </div>
</form>




    <a href="{{ route('courses.create') }}" class="btn btn-primary mb-3">Crear Curso</a>

    @if ($courses->count())
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Materia</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($courses as $course)
                    <tr>
                        <td>{{ $course->id }}</td>
                        <td>{{ $course->nombre }}</td>
                        <td>{{ $course->subject->nombre ?? 'Sin Materia' }}</td>
                        <td>
                            <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('courses.destroy', $course->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este curso?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No hay cursos registrados.</p>
    @endif
</div>
@endsection
