@extends('master')

@section('titulo', 'Añadir nuevo personaje')
 
@section('contenido')
    <div class="col-6 offset-3">
        <form method="post" action="/personajes">
            @csrf
            <div class="mb-3 px-5">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre">
            </div>
            <div class="mb-3 px-5">
                <label for="capital" class="form-label">Apellidos</label>
                <input type="text" class="form-control" id="apellidos" name="apellidos">
            </div>
            <div class="mb-3 px-5">
                <label for="superficie" class="form-label">Profesión</label>
                <input type="text" class="form-control" id="profesion" name="profesion">
            </div>
            <div class="mb-3 px-5 text-end">
                <button type="submit" class="btn btn-success">Enviar</button>
            </div>        
        </form>
    </div>
@endsection