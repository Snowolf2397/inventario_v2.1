@extends('layouts.app')

@section('template_title')
    {{ $modelo->name ?? 'Show Modelo' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Modelo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('modelos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Modelos Marca Id:</strong>
                            {{ $modelo->modelos_marca_id }}
                        </div>
                        <div class="form-group">
                            <strong>Modelo:</strong>
                            {{ $modelo->modelo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
