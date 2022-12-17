@extends('layouts.app')

@section('template_title')
    Funcionario
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Funcionario') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('funcionarios.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Rut</th>
										<th>Nombres</th>
										<th>Apellidos</th>
										<th>Correo</th>
										<th>Funcionarios Telefono Id</th>
										<th>Funcionarios Departamento Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($funcionarios as $funcionario)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $funcionario->rut }}</td>
											<td>{{ $funcionario->nombres }}</td>
											<td>{{ $funcionario->apellidos }}</td>
											<td>{{ $funcionario->correo }}</td>
											<td>{{ $funcionario->funcionarios_telefono_id }}</td>
											<td>{{ $funcionario->funcionarios_departamento_id }}</td>

                                            <td>
                                                <form action="{{ route('funcionarios.destroy',$funcionario->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('funcionarios.show',$funcionario->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('funcionarios.edit',$funcionario->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $funcionarios->links() !!}
            </div>
        </div>
    </div>
@endsection
