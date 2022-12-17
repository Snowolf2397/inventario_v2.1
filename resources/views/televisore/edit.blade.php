@extends('layouts.app')

@section('template_title')
    Update Televisore
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Televisore</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('televisores.update', $televisore->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('televisore.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
