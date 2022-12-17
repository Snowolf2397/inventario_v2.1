@extends('layouts.app')

@section('template_title')
    Router
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Router') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('routers.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Routers Marca Id</th>
										<th>Routers Modelo Id</th>
										<th>Frecuencia</th>
										<th>Compania</th>
										<th>Routers Ubicacion Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($routers as $router)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $router->routers_marca_id }}</td>
											<td>{{ $router->routers_modelo_id }}</td>
											<td>{{ $router->frecuencia }}</td>
											<td>{{ $router->compania }}</td>
											<td>{{ $router->routers_ubicacion_id }}</td>

                                            <td>
                                                <form action="{{ route('routers.destroy',$router->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('routers.show',$router->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('routers.edit',$router->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $routers->links() !!}
            </div>
        </div>
    </div>
@endsection
