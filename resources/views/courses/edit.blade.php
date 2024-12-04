@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Editar Curso</h1>

    <form action="{{ route('courses.update', $course->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{ old('nombre', $course->nombre) }}" required>
        </div>
        <div class="mb-3">
            <label for="subject_id" class="form-label">Materia</label>
            <select name="subject_id" id="subject_id" class="form-control" required>
                <option value="">-- Seleccionar Materia --</option>
                @foreach ($subjects as $subject)
                    <option value="{{ $subject->id }}" {{ $course->subject_id == $subject->id ? 'selected' : '' }}>
                        {{ $subject->nombre }}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-success">Actualizar</button>
        <a href="{{ route('courses.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
