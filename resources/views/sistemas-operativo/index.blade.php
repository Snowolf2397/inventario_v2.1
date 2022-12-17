@extends('layouts.app')

@section('template_title')
    Sistemas Operativo
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Sistemas Operativo') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('sistemas-operativos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Nombre</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sistemasOperativos as $sistemasOperativo)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $sistemasOperativo->nombre }}</td>

                                            <td>
                                                <form action="{{ route('sistemas-operativos.destroy',$sistemasOperativo->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('sistemas-operativos.show',$sistemasOperativo->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('sistemas-operativos.edit',$sistemasOperativo->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $sistemasOperativos->links() !!}
            </div>
        </div>
    </div>
@endsection
