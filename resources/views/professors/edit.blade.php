@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Editar Profesor</h1>

    <form action="{{ route('professors.update', $professor->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{ old('nombre', $professor->nombre) }}" required>
        </div>
        <button type="submit" class="btn btn-success">Actualizar</button>
        <a href="{{ route('professors.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
