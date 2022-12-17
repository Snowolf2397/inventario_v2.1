@extends('layouts.app')

@section('template_title')
    {{ $impresora->name ?? 'Show Impresora' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Impresora</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('impresoras.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Impresoras Marca Id:</strong>
                            {{ $impresora->impresoras_marca_id }}
                        </div>
                        <div class="form-group">
                            <strong>Impresoras Modelo Id:</strong>
                            {{ $impresora->impresoras_modelo_id }}
                        </div>
                        <div class="form-group">
                            <strong>Impresoras Ubicacion Id:</strong>
                            {{ $impresora->impresoras_ubicacion_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
