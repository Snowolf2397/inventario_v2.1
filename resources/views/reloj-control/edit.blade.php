@extends('layouts.app')

@section('template_title')
    Update Reloj Control
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Reloj Control</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('reloj-controls.update', $relojControl->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('reloj-control.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
