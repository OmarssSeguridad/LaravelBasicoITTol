@extends('layout.master')
@section('content')

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Accion</th>
        </tr>
    </thead>
    <tbody>
        @foreach($clasificacion as $clasificaciones)
        <tr>
            <th scope="row">{{$clasificaciones->id}}</th>
            <td>{{$clasificaciones->nombre}}</td>
            <td>
                <div class="btn-group">
                    <form method="POST" class="form-horizontal" role="form" action="{{route('clasificacion.destroy', $clasificaciones->id)}}">
                        {{ csrf_field() }}
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger">Eliminar</button>
                    </form>
                    <a href="{{route('clasificacion.edit', $clasificaciones->id)}}" class="btn btn-outline-warning">Editar</a>

                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


@endsection