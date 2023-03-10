@extends('layouts.app')

@section('template_title')
    Impresora
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Impresora') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('impresoras.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Impresoras Marca Id</th>
										<th>Impresoras Modelo Id</th>
										<th>Impresoras Ubicacion Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($impresoras as $impresora)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $impresora->impresoras_marca_id }}</td>
											<td>{{ $impresora->impresoras_modelo_id }}</td>
											<td>{{ $impresora->impresoras_ubicacion_id }}</td>

                                            <td>
                                                <form action="{{ route('impresoras.destroy',$impresora->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('impresoras.show',$impresora->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('impresoras.edit',$impresora->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $impresoras->links() !!}
            </div>
        </div>
    </div>
@endsection
