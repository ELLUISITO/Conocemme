@extends('layouts.app')

@section('template_title')
    Horario
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Horario') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('horarios.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Dia Semana Lv</th>
										<th>Hora Apertura Lv</th>
										<th>Hora Cierre Lv</th>
										<th>Dia Semana S</th>
										<th>Hora Apertura S</th>
										<th>Hora Cierre S</th>
										<th>Dia Semana Df</th>
										<th>Hora Apertura Df</th>
										<th>Hora Cierre Df</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($horarios as $horario)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $horario->id_restaurantes }}</td>
											<td>{{ $horario->dia_semana_LV }}</td>
											<td>{{ $horario->hora_apertura_LV }}</td>
											<td>{{ $horario->hora_cierre_LV }}</td>
											<td>{{ $horario->dia_semana_S }}</td>
											<td>{{ $horario->hora_apertura_S }}</td>
											<td>{{ $horario->hora_cierre_S }}</td>
											<td>{{ $horario->dia_semana_DF }}</td>
											<td>{{ $horario->hora_apertura_DF }}</td>
											<td>{{ $horario->hora_cierre_DF }}</td>

                                            <td>
                                                <form action="{{ route('horarios.destroy',$horario->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('horarios.show',$horario->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('horarios.edit',$horario->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $horarios->links() !!}
            </div>
        </div>
    </div>
@endsection
