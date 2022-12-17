@extends('layouts.app')

@section('template_title')
    {{ $teclado->name ?? 'Show Teclado' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Teclado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('teclados.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Teclados Marca Id:</strong>
                            {{ $teclado->teclados_marca_id }}
                        </div>
                        <div class="form-group">
                            <strong>Teclados Ubicacion Id:</strong>
                            {{ $teclado->teclados_ubicacion_id }}
                        </div>
                        <div class="form-group">
                            <strong>Teclados Funcionario Id:</strong>
                            {{ $teclado->teclados_funcionario_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
