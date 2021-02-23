@extends('layout.master')
@section('content')

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Accion</th>
        </tr>
    </thead>
    <tbody>
        @foreach($editorial as $editoriales)
        <tr>
            <th scope="row">{{$editoriales->id}}</th>
            <td>{{$editoriales->nombre}}</td>
            <td>{{$editoriales->descripcion}}</td>
            <td>
                <div class="btn-group">
                    <form method="POST" class="form-horizontal" role="form" action="{{route('editorial.destroy', $editoriales->id)}}">
                        {{ csrf_field() }}
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger">Eliminar</button>
                    </form>
                    <a href="{{route('editorial.edit', $editoriales->id)}}" class="btn btn-outline-warning">Editar</a>

                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


@endsection