@extends('layouts.app')

@section('template_title')
    Mouse
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Mouse') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('mice.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Mouses Marca Id</th>
										<th>Mouses Ubicacion Id</th>
										<th>Mouses Funcionario Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($mice as $mouse)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $mouse->mouses_marca_id }}</td>
											<td>{{ $mouse->mouses_ubicacion_id }}</td>
											<td>{{ $mouse->mouses_funcionario_id }}</td>

                                            <td>
                                                <form action="{{ route('mice.destroy',$mouse->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('mice.show',$mouse->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('mice.edit',$mouse->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $mice->links() !!}
            </div>
        </div>
    </div>
@endsection
