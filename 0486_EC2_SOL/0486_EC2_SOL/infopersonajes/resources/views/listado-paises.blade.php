@extends('master')

@section('titulo', 'Listado de paises')
 
@section('contenido')
    @if (count($paises) > 0)
        <div class="col-6 offset-3">
            <table class="table table-striped">
                <tbody>
                    @foreach ($paises as $pais)
                        <tr>
                            <td class="w-100">{{$pais->nombre}}</td>
                            <td>
                                <a class="btn btn-outline-success" role="button" href="/paises/{{$pais->id}}">Detalles</a>
                            </td>
                            <td>
                                <a class="btn btn-outline-primary" role="button" href="/paises/{{$pais->id}}/edit">Editar</a>
                            </td>
                            <td>
                                <form action="/paises/{{$pais->id}}" method="post">
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
                No hay paises
            </div>
        </div>
    @endif
@endsection