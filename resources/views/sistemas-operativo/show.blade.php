@extends('layouts.app')

@section('template_title')
    {{ $sistemasOperativo->name ?? 'Show Sistemas Operativo' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Sistemas Operativo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('sistemas-operativos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $sistemasOperativo->nombre }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
