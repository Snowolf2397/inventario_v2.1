@extends('layouts.app')

@section('template_title')
    Reloj Control
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Reloj Control') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('reloj-controls.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Reloj Marca Id</th>
										<th>Reloj Modelo Id</th>
										<th>Reloj Ubicacion Id</th>
										<th>Reloj Departamento Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($relojControls as $relojControl)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $relojControl->reloj_marca_id }}</td>
											<td>{{ $relojControl->reloj_modelo_id }}</td>
											<td>{{ $relojControl->reloj_ubicacion_id }}</td>
											<td>{{ $relojControl->reloj_departamento_id }}</td>

                                            <td>
                                                <form action="{{ route('reloj-controls.destroy',$relojControl->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('reloj-controls.show',$relojControl->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('reloj-controls.edit',$relojControl->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $relojControls->links() !!}
            </div>
        </div>
    </div>
@endsection
