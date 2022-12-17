@extends('layouts.app')

@section('template_title')
    {{ $notebook->name ?? 'Show Notebook' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Notebook</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('notebooks.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Notebooks Marca Id:</strong>
                            {{ $notebook->notebooks_marca_id }}
                        </div>
                        <div class="form-group">
                            <strong>Notebooks Modelo Id:</strong>
                            {{ $notebook->notebooks_modelo_id }}
                        </div>
                        <div class="form-group">
                            <strong>Almacenamiento:</strong>
                            {{ $notebook->almacenamiento }}
                        </div>
                        <div class="form-group">
                            <strong>Can Almacenamiento:</strong>
                            {{ $notebook->can_almacenamiento }}
                        </div>
                        <div class="form-group">
                            <strong>Can Ram:</strong>
                            {{ $notebook->can_ram }}
                        </div>
                        <div class="form-group">
                            <strong>Notebooks Procesador Id:</strong>
                            {{ $notebook->notebooks_procesador_id }}
                        </div>
                        <div class="form-group">
                            <strong>Notebooks Ubicacion Id:</strong>
                            {{ $notebook->notebooks_ubicacion_id }}
                        </div>
                        <div class="form-group">
                            <strong>Notebooks Funcionario Id:</strong>
                            {{ $notebook->notebooks_funcionario_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
