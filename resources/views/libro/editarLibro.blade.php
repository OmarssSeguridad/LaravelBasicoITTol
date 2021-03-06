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
                        <h4 class="card-title">Editar Libro
                        </h4>
                    </div>
                    <div class="card-body">
                        <form class="form-horizontal" method="POST" action="{{ route('libro.update', $libro->id) }}">
                            {{ csrf_field() }}
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="nombre" class="bmd-label-floating">Nombre</label>
                                        <input type="text" value="{{$libro->nombre}}" name="nombre" class="form-control" id="nombre" required="true">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="id_editorial" class="bmd-label-floating">Editorial</label>
                                        <select name="id_editorial" class="form-control" id="id_editorial" required="true">
                                            <option>Selecciona una opción</option>
                                            @foreach(App\Models\Editorial::where('status', 1)->get() as $editorial)
                                            <option {{$editorial->id== $libro->id_editorial ? 'selected="selected"':''}} value="{{$editorial->id}}">{{$editorial->nombre}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="id_clasificacion" class="bmd-label-floating">Clasificación</label>
                                        <select name="id_clasificacion" class="form-control" id="id_clasificacion" required="true">

                                            <option>Selecciona una opción</option>
                                            @foreach(App\Models\Clasificacion::where('status', 1)->get() as $clasificacion)
                                            <option {{$clasificacion->id== $libro->id_clasificacion ? 'selected="selected"':''}} value="{{$clasificacion->id}}">{{$clasificacion->nombre}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="isbn" class="bmd-label-floating">ISBN</label>
                                        <input type="text" value="{{$libro->isbn}}" name="isbn" class="form-control" id="isbn" required="true">
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="tot_paginas" class="bmd-label-floating">Total páginas</label>
                                        <input type="text" value="{{$libro->tot_paginas}}" name="tot_paginas" class="form-control" id="tot_paginas" required="true">
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