@extends('master')

@section('titulo', $personaje->nombre.' '. $personaje->apellidos)
 
@section('contenido')
    <div class="col-6 offset-3">
        <table class="table table-striped">
            <tbody>
                <tr>
                    <th class="w-50">Profesión</th>
                    <td class="w-50">{{$personaje->profesion}}</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection