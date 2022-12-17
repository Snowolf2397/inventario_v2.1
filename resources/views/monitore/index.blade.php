@extends('layouts.app')

@section('template_title')
    Monitore
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Monitore') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('monitores.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Monitores Marca Id</th>
										<th>Entrada</th>
										<th>Alimentacion</th>
										<th>Monitores Ubicacion Id</th>
										<th>Monitores Funcionario Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($monitores as $monitore)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $monitore->monitores_marca_id }}</td>
											<td>{{ $monitore->entrada }}</td>
											<td>{{ $monitore->alimentacion }}</td>
											<td>{{ $monitore->monitores_ubicacion_id }}</td>
											<td>{{ $monitore->monitores_funcionario_id }}</td>

                                            <td>
                                                <form action="{{ route('monitores.destroy',$monitore->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('monitores.show',$monitore->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('monitores.edit',$monitore->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $monitores->links() !!}
            </div>
        </div>
    </div>
@endsection
