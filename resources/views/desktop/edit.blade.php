@extends('layouts.app')

@section('template_title')
    Update Desktop
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Desktop</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('desktops.update', $desktop->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('desktop.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
