@extends('layouts.app')

@section('template_title')
    {{ $funcionario->name ?? 'Show Funcionario' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Funcionario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('funcionarios.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Rut:</strong>
                            {{ $funcionario->rut }}
                        </div>
                        <div class="form-group">
                            <strong>Nombres:</strong>
                            {{ $funcionario->nombres }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidos:</strong>
                            {{ $funcionario->apellidos }}
                        </div>
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $funcionario->correo }}
                        </div>
                        <div class="form-group">
                            <strong>Funcionarios Telefono Id:</strong>
                            {{ $funcionario->funcionarios_telefono_id }}
                        </div>
                        <div class="form-group">
                            <strong>Funcionarios Departamento Id:</strong>
                            {{ $funcionario->funcionarios_departamento_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
