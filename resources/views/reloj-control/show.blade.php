@extends('layouts.app')

@section('template_title')
    {{ $relojControl->name ?? 'Show Reloj Control' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Reloj Control</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('reloj-controls.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Reloj Marca Id:</strong>
                            {{ $relojControl->reloj_marca_id }}
                        </div>
                        <div class="form-group">
                            <strong>Reloj Modelo Id:</strong>
                            {{ $relojControl->reloj_modelo_id }}
                        </div>
                        <div class="form-group">
                            <strong>Reloj Ubicacion Id:</strong>
                            {{ $relojControl->reloj_ubicacion_id }}
                        </div>
                        <div class="form-group">
                            <strong>Reloj Departamento Id:</strong>
                            {{ $relojControl->reloj_departamento_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
