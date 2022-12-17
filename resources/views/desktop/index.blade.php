@extends('layouts.app')

@section('template_title')
    Desktop
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Desktop') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('desktops.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Desktops Procesador Id</th>
										<th>Almacenamiento</th>
										<th>Cant Almacenamiento</th>
										<th>Cant Ram</th>
										<th>Desktops Sistema Operativo Id</th>
										<th>Desktops Ubicacion Id</th>
										<th>Desktops Funcionario Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($desktops as $desktop)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $desktop->desktops_procesador_id }}</td>
											<td>{{ $desktop->almacenamiento }}</td>
											<td>{{ $desktop->cant_almacenamiento }}</td>
											<td>{{ $desktop->cant_ram }}</td>
											<td>{{ $desktop->desktops_sistema_operativo_id }}</td>
											<td>{{ $desktop->desktops_ubicacion_id }}</td>
											<td>{{ $desktop->desktops_funcionario_id }}</td>

                                            <td>
                                                <form action="{{ route('desktops.destroy',$desktop->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('desktops.show',$desktop->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('desktops.edit',$desktop->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $desktops->links() !!}
            </div>
        </div>
    </div>
@endsection
