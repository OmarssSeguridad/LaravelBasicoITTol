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
                        <h4 class="card-title">Alta Clasificacion
                        </h4>
                    </div>
                    <div class="card-body">
                        <form class="form-horizontal" method="POST" action="{{ route('clasificacion.store') }}">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="nombre" class="bmd-label-floating">Nombre</label>
                                        <input type="text" name="nombre" class="form-control" id="nombre" required="true">
                                    </div>
                                </div>

                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Crear</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection