@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Profesores</h1>

    <form method="GET" action="{{ route('professors.index') }}" class="mb-4">
    <div class="row">
        <div class="col-md-10">
            <input type="text" name="nombre" class="form-control" placeholder="Buscar por nombre" value="{{ request('nombre') }}">
        </div>
        <div class="col-md-2">
            <button type="submit" class="btn btn-primary">Buscar</button>
        </div>
    </div>
</form>


    <a href="{{ route('professors.create') }}" class="btn btn-primary mb-3">Crear Profesor</a>

    @if ($professors->count())
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($professors as $professor)
                    <tr>
                        <td>{{ $professor->id }}</td>
                        <td>{{ $professor->nombre }}</td>
                        <td>
                            <a href="{{ route('professors.edit', $professor->id) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('professors.destroy', $professor->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este profesor?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No hay profesores registrados.</p>
    @endif
</div>
@endsection
