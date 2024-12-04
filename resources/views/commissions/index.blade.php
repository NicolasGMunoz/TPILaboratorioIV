@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Comisiones</h1>
    <a href="{{ route('commissions.create') }}" class="btn btn-primary mb-3">Crear Comisión</a>

    @if ($commissions->count())
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Aula</th>
                    <th>Horario</th>
                    <th>Curso</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($commissions as $commission)
                    <tr>
                        <td>{{ $commission->id }}</td>
                        <td>{{ $commission->aula }}</td>
                        <td>{{ $commission->horario }}</td>
                        <td>{{ $commission->course->nombre ?? 'Sin Curso' }}</td>
                        <td>
                            <a href="{{ route('commissions.edit', $commission->id) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('commissions.destroy', $commission->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar esta comisión?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No hay comisiones registradas.</p>
    @endif
</div>
@endsection
