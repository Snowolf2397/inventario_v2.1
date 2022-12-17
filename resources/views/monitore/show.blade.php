@extends('layouts.app')

@section('template_title')
    {{ $monitore->name ?? 'Show Monitore' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Monitore</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('monitores.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Monitores Marca Id:</strong>
                            {{ $monitore->monitores_marca_id }}
                        </div>
                        <div class="form-group">
                            <strong>Entrada:</strong>
                            {{ $monitore->entrada }}
                        </div>
                        <div class="form-group">
                            <strong>Alimentacion:</strong>
                            {{ $monitore->alimentacion }}
                        </div>
                        <div class="form-group">
                            <strong>Monitores Ubicacion Id:</strong>
                            {{ $monitore->monitores_ubicacion_id }}
                        </div>
                        <div class="form-group">
                            <strong>Monitores Funcionario Id:</strong>
                            {{ $monitore->monitores_funcionario_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
