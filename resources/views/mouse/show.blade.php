@extends('layouts.app')

@section('template_title')
    {{ $mouse->name ?? 'Show Mouse' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Mouse</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('mice.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Mouses Marca Id:</strong>
                            {{ $mouse->mouses_marca_id }}
                        </div>
                        <div class="form-group">
                            <strong>Mouses Ubicacion Id:</strong>
                            {{ $mouse->mouses_ubicacion_id }}
                        </div>
                        <div class="form-group">
                            <strong>Mouses Funcionario Id:</strong>
                            {{ $mouse->mouses_funcionario_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
