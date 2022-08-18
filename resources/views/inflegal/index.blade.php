@extends('layouts.app')

@section('template_title')
    Inflegal
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Inflegal') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('inflegals.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Regimen Tributario</th>
										<th>Tipo Persona</th>
										<th>Tipo Documento</th>
										<th>Numero Documento</th>
										<th>Razon Social</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($inflegals as $inflegal)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $inflegal->id_restaurantes }}</td>
											<td>{{ $inflegal->regimen_tributario }}</td>
											<td>{{ $inflegal->tipo_persona }}</td>
											<td>{{ $inflegal->tipo_documento }}</td>
											<td>{{ $inflegal->numero_documento }}</td>
											<td>{{ $inflegal->razon_social }}</td>

                                            <td>
                                                <form action="{{ route('inflegals.destroy',$inflegal->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('inflegals.show',$inflegal->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('inflegals.edit',$inflegal->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $inflegals->links() !!}
            </div>
        </div>
    </div>
@endsection
