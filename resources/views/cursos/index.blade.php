<!-- resources/views/cursos/index.blade.php -->

@extends('adminlte::page')

@section('title', 'Lista de Cursos')

@section('content_header')
    <h1>Lista de Cursos</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Cursos Disponibles</h3>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>Título</th>
                        <th>Descripción</th>
                        <th>Precio</th>
                        <th>Duración</th>
                        <th>Profesor</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cursos as $curso)
                        <tr>
                            <td>{{ $curso->titulo }}</td>
                            <td>{{ $curso->descripcion }}</td>
                            <td>{{ $curso->precio }}</td>
                            <td>{{ $curso->duracion }} horas</td>
                            <td>{{ $curso->profesor->nombre }}</td>
                            <td>
                                <a href="{{ route('comprar.curso', ['curso' => $curso->id]) }}" class="btn btn-primary">Comprar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('css/admin_custom.css') }}">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop