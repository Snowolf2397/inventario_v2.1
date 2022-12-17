@extends('layouts.app')

@section('template_title')
    {{ $router->name ?? 'Show Router' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Router</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('routers.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Routers Marca Id:</strong>
                            {{ $router->routers_marca_id }}
                        </div>
                        <div class="form-group">
                            <strong>Routers Modelo Id:</strong>
                            {{ $router->routers_modelo_id }}
                        </div>
                        <div class="form-group">
                            <strong>Frecuencia:</strong>
                            {{ $router->frecuencia }}
                        </div>
                        <div class="form-group">
                            <strong>Compania:</strong>
                            {{ $router->compania }}
                        </div>
                        <div class="form-group">
                            <strong>Routers Ubicacion Id:</strong>
                            {{ $router->routers_ubicacion_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
