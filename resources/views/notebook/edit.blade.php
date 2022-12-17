@extends('layouts.app')

@section('template_title')
    Update Notebook
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Notebook</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('notebooks.update', $notebook->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('notebook.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
