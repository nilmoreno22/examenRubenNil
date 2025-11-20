@extends('master')

@section('titulo', 'Añadir nuevo país')
 
@section('contenido')
    <div class="col-6 offset-3">
        <form method="post" action="/paises">
            @csrf
            <div class="mb-3 px-5">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre">
            </div>
            <div class="mb-3 px-5">
                <label for="capital" class="form-label">Capital</label>
                <input type="text" class="form-control" id="capital" name="capital">
            </div>
            <div class="mb-3 px-5">
                <label for="superficie" class="form-label">Superficie</label>
                <input type="number" class="form-control" id="superficie" name="superficie">
            </div>
            <div class="mb-3 px-5">
                <label for="habitantes" class="form-label">Habitantes</label>
                <input type="number" class="form-control" id="habitantes" name="habitantes">
            </div>
            <div class="mb-3 px-5 text-end">
                <button type="submit" class="btn btn-success">Enviar</button>
            </div>        
        </form>
    </div>
@endsection