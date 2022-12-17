@extends('layouts.app')

@section('template_title')
    {{ $telefono->name ?? 'Show Telefono' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Telefono</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('telefonos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Telefonos Modelo Id:</strong>
                            {{ $telefono->telefonos_modelo_id }}
                        </div>
                        <div class="form-group">
                            <strong>Numero Telefono:</strong>
                            {{ $telefono->numero_telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Compania:</strong>
                            {{ $telefono->compania }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
