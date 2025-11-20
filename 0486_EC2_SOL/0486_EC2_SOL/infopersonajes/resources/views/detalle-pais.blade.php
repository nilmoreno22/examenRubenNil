@extends('master')

@section('titulo', $pais->nombre)
 
@section('contenido')
    <div class="col-6 offset-3">
        <table class="table table-striped">
            <tbody>
                <tr>
                    <th class="w-50">Capital</th>
                    <td class="w-50">{{$pais->capital}}</td>
                </tr>
                <tr>
                    <th class="w-50">Superficie</th>
                    <td class="w-50">{{$pais->superficie}}</td>
                </tr>
                <tr>
                    <th class="w-50">Habitantes</th>
                    <td class="w-50">{{$pais->habitantes}}</td>
                </tr>
                <tr>
                    <th class="w-50">Densidad de población</th>
                    <td class="w-50">{{$densidad}}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="col-6 offset-3">
        <h3>Personajes</h3>
        <table class="table table-striped">
            <tbody>
                <tr>
                    <td class="w-100">Nombre completo (Profesión)</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection