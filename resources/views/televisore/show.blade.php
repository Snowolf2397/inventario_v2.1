@extends('layouts.app')

@section('template_title')
    {{ $televisore->name ?? 'Show Televisore' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Televisore</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('televisores.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Televisores Marca Id:</strong>
                            {{ $televisore->televisores_marca_id }}
                        </div>
                        <div class="form-group">
                            <strong>Televisores Ubicacion Id:</strong>
                            {{ $televisore->televisores_ubicacion_id }}
                        </div>
                        <div class="form-group">
                            <strong>Pulgadas:</strong>
                            {{ $televisore->pulgadas }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
