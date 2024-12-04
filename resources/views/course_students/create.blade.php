@extends('layouts.app')

@section('title', 'Crear Inscripción')

@section('content')
<div class="container">
    <h1 class="mb-4">Crear Inscripción</h1>

    <form action="{{ route('course_students.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="student_id" class="form-label">Estudiante</label>
            <select name="student_id" id="student_id" class="form-control" required>
                <option value="">-- Seleccionar Estudiante --</option>
                @foreach ($students as $student)
                    <option value="{{ $student->id }}">{{ $student->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="course_id" class="form-label">Curso</label>
            <select name="course_id" id="course_id" class="form-control" required>
                <option value="">-- Seleccionar Curso --</option>
                @foreach ($courses as $course)
                    <option value="{{ $course->id }}">{{ $course->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="commission_id" class="form-label">Comisión</label>
            <select name="commission_id" id="commission_id" class="form-control" required>
                <option value="">-- Seleccionar Comisión --</option>
                @foreach ($commissions as $commission)
                    <option value="{{ $commission->id }}">{{ $commission->aula }} - {{ $commission->horario }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="{{ route('course_students.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
