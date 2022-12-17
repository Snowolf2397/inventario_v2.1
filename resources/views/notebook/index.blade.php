@extends('layouts.app')

@section('template_title')
    Notebook
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Notebook') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('notebooks.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Notebooks Marca Id</th>
										<th>Notebooks Modelo Id</th>
										<th>Almacenamiento</th>
										<th>Can Almacenamiento</th>
										<th>Can Ram</th>
										<th>Notebooks Procesador Id</th>
										<th>Notebooks Ubicacion Id</th>
										<th>Notebooks Funcionario Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($notebooks as $notebook)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $notebook->notebooks_marca_id }}</td>
											<td>{{ $notebook->notebooks_modelo_id }}</td>
											<td>{{ $notebook->almacenamiento }}</td>
											<td>{{ $notebook->can_almacenamiento }}</td>
											<td>{{ $notebook->can_ram }}</td>
											<td>{{ $notebook->notebooks_procesador_id }}</td>
											<td>{{ $notebook->notebooks_ubicacion_id }}</td>
											<td>{{ $notebook->notebooks_funcionario_id }}</td>

                                            <td>
                                                <form action="{{ route('notebooks.destroy',$notebook->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('notebooks.show',$notebook->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('notebooks.edit',$notebook->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $notebooks->links() !!}
            </div>
        </div>
    </div>
@endsection
