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
        @foreach($clasificaciones as $clasificacion)
        <tr>
            <th scope="row">{{$clasificacion->id}}</th>
            <td>{{$clasificacion->nombre}}</td>
            <td>
                <div class="btn-group">
                    <form method="POST" class="form-horizontal" role="form" action="{{route('clasificacion.destroy', $clasificacion->id)}}">
                        {{ csrf_field() }}
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger">Eliminar</button>
                    </form>
                    <a href="{{route('clasificacion.edit', $clasificacion->id)}}" class="btn btn-outline-warning">Editar</a>

                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


@endsection