@extends('adminlte::page')

@section('title', 'inicio')

@section('content_header')
    <h1 class="text-center">Undemy</h1>
@stop

@section('content')
    <h5 class="text-center">Bienvenido <b>{{ Auth::user()->name }}</b></h5>

    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <img src="https://img.icons8.com/color/452/javascript.png" class="card-img-top" alt="JavaScript">
                <div class="card-body">
                    <h5 class="card-title">JavaScript</h5>
                    <p class="card-text">Aprende JavaScript para desarrollo web.</p>
                    <a href="#" class="btn btn-primary">Comprar</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <img src="https://img.icons8.com/color/452/python.png" class="card-img-top" alt="Python">
                <div class="card-body">
                    <h5 class="card-title">Python</h5>
                    <p class="card-text">Descubre el poder de Python en la programación.</p>
                    <a href="#" class="btn btn-primary">Comprar</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <img src="https://img.icons8.com/color/452/ruby-programming-language.png" class="card-img-top" alt="Ruby">
                <div class="card-body">
                    <h5 class="card-title">Ruby</h5>
                    <p class="card-text">Explora la elegancia de Ruby en el desarrollo de software.</p>
                    <a href="#" class="btn btn-primary">Comprar</a>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <!-- Agregar estilos personalizados si es necesario -->
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <!-- Agregar scripts personalizados si es necesario -->
@stop