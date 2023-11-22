@extends('adminlte::page')

@section('title', 'Agregar Nuevo Curso')

@section('content_header')
    <h1>Agregar Nuevo Curso</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('cursos.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="titulo" class="form-label">Título del Curso</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" required>
                </div>

                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción del Curso</label>
                    <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="precio" class="form-label">Precio del Curso</label>
                    <input type="number" class="form-control" id="precio" name="precio" required>
                </div>

                <div class="mb-3">
                    <label for="duracion" class="form-label">Duración del Curso (en horas)</label>
                    <input type="number" class="form-control" id="duracion" name="duracion" required>
                </div>

                <!-- Agrega aquí los campos adicionales que necesites para tu formulario -->

                <button type="submit" class="btn btn-primary">Agregar Curso</button>
            </form>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('css/admin_custom.css') }}">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop