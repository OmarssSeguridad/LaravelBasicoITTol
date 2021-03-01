@extends('layout.master')
@section('content')

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Editorial</th>
            <th scope="col">Clasificación</th>
            <th scope="col">ISBN</th>
            <th scope="col">Tot. Páginas</th>
            <th scope="col">Accion</th>
        </tr>
    </thead>
    <tbody>
        @foreach($libros as $libro)
        <tr>
            <th scope="row">{{$libro->id}}</th>
            <td>{{$libro->nombre}}</td>
            <td>{{$libro->editorial->nombre}}</td>
            <td>{{$libro->clasificacion->nombre}}</td>
            <td>{{$libro->isbn}}</td>
            <td>{{$libro->tot_paginas}}</td>
            <td>
                <div class="btn-group">
                    <form method="POST" class="form-horizontal" role="form" action="{{route('libro.destroy', $libro->id)}}">
                        {{ csrf_field() }}
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger">Eliminar</button>
                    </form>
                    <a href="{{route('libro.edit', $libro->id)}}" class="btn btn-outline-warning">Editar</a>

                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


@endsection