@extends('layouts.app')

@section('template_title')
    {{ $desktop->name ?? 'Show Desktop' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Desktop</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('desktops.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Desktops Procesador Id:</strong>
                            {{ $desktop->desktops_procesador_id }}
                        </div>
                        <div class="form-group">
                            <strong>Almacenamiento:</strong>
                            {{ $desktop->almacenamiento }}
                        </div>
                        <div class="form-group">
                            <strong>Cant Almacenamiento:</strong>
                            {{ $desktop->cant_almacenamiento }}
                        </div>
                        <div class="form-group">
                            <strong>Cant Ram:</strong>
                            {{ $desktop->cant_ram }}
                        </div>
                        <div class="form-group">
                            <strong>Desktops Sistema Operativo Id:</strong>
                            {{ $desktop->desktops_sistema_operativo_id }}
                        </div>
                        <div class="form-group">
                            <strong>Desktops Ubicacion Id:</strong>
                            {{ $desktop->desktops_ubicacion_id }}
                        </div>
                        <div class="form-group">
                            <strong>Desktops Funcionario Id:</strong>
                            {{ $desktop->desktops_funcionario_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
