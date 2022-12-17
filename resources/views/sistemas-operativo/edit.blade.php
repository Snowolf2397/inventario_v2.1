@extends('layouts.app')

@section('template_title')
    Update Sistemas Operativo
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Sistemas Operativo</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('sistemas-operativos.update', $sistemasOperativo->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('sistemas-operativo.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
