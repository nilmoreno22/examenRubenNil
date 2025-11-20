@extends('master')

@section('titulo', 'Listado de personajes')
 
@section('contenido')
    @if (count($personajes) > 0)
        <div class="col-6 offset-3">
            <table class="table table-striped">
                <tbody>
                    @foreach ($personajes as $personaje)
                        <tr>
                            <td class="w-100">{{$personaje->nombre}} {{$personaje->apellidos}}</td>
                            <td>
                                <a class="btn btn-outline-success" role="button" href="/personajes/{{$personaje->id}}">Detalles</a>
                            </td>
                            <td>
                                <a class="btn btn-outline-primary" role="button" href="/personajes/{{$personaje->id}}/edit">Editar</a>
                            </td>
                            <td>
                                <form action="/personajes/{{$personaje->id}}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-outline-danger">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <div class="col-6 offset-3">
            <div class="alert alert-danger" role="alert">
                No hay personajes
            </div>
        </div>
    @endif
@endsection