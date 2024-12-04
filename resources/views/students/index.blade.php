@extends('layouts.app')

@section('title', 'Estudiantes')

@section('content')
<div class="container">
    <h1 class="mb-4">Estudiantes</h1>
    <a href="{{ route('students.create') }}" class="btn btn-primary mb-3">Agregar Nuevo Estudiante</a>
    <form method="GET" action="{{ route('students.index') }}" class="mb-4">
        <div class="row">
            <div class="col-md-6">
                <input type="text" name="nombre" class="form-control" placeholder="Buscar por nombre" value="{{ request('nombre') }}">
            </div>
            <div class="col-md-4">
                <select name="curso_id" class="form-control">

                    <option value="">-- Filtrar por Curso --</option>
                    @foreach($courses as $course)
                        <option value="{{ $course->id }}" {{ request('curso_id') == $course->id ? 'selected' : '' }}>
                            {{ $course->nombre }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-primary">Filtrar</button>
            </div>
        </div>
    </form>

    @if ($students->count())
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Curso(s)</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->nombre }}</td>
                        <td>{{ $student->email }}</td>
                        <td>
                            @foreach ($student->courses as $course)
                                {{ $course->nombre }}
                            @endforeach
                        </td>
                        <td>
                            <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este estudiante?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No hay estudiantes registrados.</p>
    @endif
</div>
@endsection
