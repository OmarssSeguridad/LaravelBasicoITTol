@extends('layout.master')

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-icon card-header-rose">
                        <div class="card-icon">
                        </div>
                        <h4 class="card-title">Editar Editorial
                        </h4>
                    </div>
                    <div class="card-body">
                        <form class="form-horizontal" method="POST" action="{{ route('editorial.update', $editorial->id) }}">
                            {{ csrf_field() }}
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="nombre" class="bmd-label-floating">Nombre</label>
                                        <input type="text" value="{{$editorial->nombre}}"  name="nombre" class="form-control" id="nombre" required="true">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="descripcion" class="bmd-label-floating">Descripcion</label>
                                        <input type="text" value="{{$editorial->descripcion}}" name="descripcion" class="form-control" id="descripcion" required="true">
                                    </div>
                                </div>

                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Editar</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection