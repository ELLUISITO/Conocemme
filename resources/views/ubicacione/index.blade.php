@extends('layouts.app')

@section('template_title')
    Ubicacione
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Ubicacione') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('ubicaciones.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Nombre Sede</th>
										<th>Departamento</th>
										<th>Municipio</th>
										<th>Codigo Postal</th>
										<th>Barrio</th>
										<th>Direccion</th>
										<th>Anexo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ubicaciones as $ubicacione)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $ubicacione->id_restaurantes }}</td>
											<td>{{ $ubicacione->nombre_sede }}</td>
											<td>{{ $ubicacione->departamento }}</td>
											<td>{{ $ubicacione->municipio }}</td>
											<td>{{ $ubicacione->codigo_postal }}</td>
											<td>{{ $ubicacione->barrio }}</td>
											<td>{{ $ubicacione->direccion }}</td>
											<td>{{ $ubicacione->anexo }}</td>

                                            <td>
                                                <form action="{{ route('ubicaciones.destroy',$ubicacione->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('ubicaciones.show',$ubicacione->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('ubicaciones.edit',$ubicacione->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $ubicaciones->links() !!}
            </div>
        </div>
    </div>
@endsection
