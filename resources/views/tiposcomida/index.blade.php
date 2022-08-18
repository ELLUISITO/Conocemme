@extends('layouts.app')

@section('template_title')
    Tiposcomida
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Tiposcomida') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('tiposcomidas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Id Restaurantes</th>
										<th>Tipos Comida</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tiposcomidas as $tiposcomida)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $tiposcomida->id_restaurantes }}</td>
											<td>{{ $tiposcomida->tipos_comida }}</td>

                                            <td>
                                                <form action="{{ route('tiposcomidas.destroy',$tiposcomida->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('tiposcomidas.show',$tiposcomida->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('tiposcomidas.edit',$tiposcomida->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $tiposcomidas->links() !!}
            </div>
        </div>
    </div>
@endsection
