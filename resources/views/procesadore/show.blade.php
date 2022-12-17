@extends('layouts.app')

@section('template_title')
    {{ $procesadore->name ?? 'Show Procesadore' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Procesadore</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('procesadores.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Procesadores Marca Id:</strong>
                            {{ $procesadore->procesadores_marca_id }}
                        </div>
                        <div class="form-group">
                            <strong>Procesadores Modelo Id:</strong>
                            {{ $procesadore->procesadores_modelo_id }}
                        </div>
                        <div class="form-group">
                            <strong>Frecuencia:</strong>
                            {{ $procesadore->frecuencia }}
                        </div>
                        <div class="form-group">
                            <strong>Nucleos:</strong>
                            {{ $procesadore->nucleos }}
                        </div>
                        <div class="form-group">
                            <strong>Hilos:</strong>
                            {{ $procesadore->hilos }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
