@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Editar Comisión</h1>

    <form action="{{ route('commissions.update', $commission->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="aula" class="form-label">Aula</label>
            <input type="text" name="aula" id="aula" class="form-control" value="{{ old('aula', $commission->aula) }}" required>
        </div>
        <div class="mb-3">
            <label for="horario" class="form-label">Horario</label>
            <input type="text" name="horario" id="horario" class="form-control" value="{{ old('horario', $commission->horario) }}" required>
        </div>
        <div class="mb-3">
            <label for="course_id" class="form-label">Curso</label>
            <select name="course_id" id="course_id" class="form-control" required>
                <option value="">-- Seleccionar Curso --</option>
                @foreach ($courses as $course)
                    <option value="{{ $course->id }}" {{ $commission->course_id == $course->id ? 'selected' : '' }}>
                        {{ $course->nombre }}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-success">Actualizar</button>
        <a href="{{ route('commissions.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
