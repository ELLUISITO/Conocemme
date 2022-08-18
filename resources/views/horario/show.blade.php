@extends('layouts.app')

@section('template_title')
    {{ $horario->name ?? 'Show Horario' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Horario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('horarios.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Restaurantes:</strong>
                            {{ $horario->id_restaurantes }}
                        </div>
                        <div class="form-group">
                            <strong>Dia Semana Lv:</strong>
                            {{ $horario->dia_semana_LV }}
                        </div>
                        <div class="form-group">
                            <strong>Hora Apertura Lv:</strong>
                            {{ $horario->hora_apertura_LV }}
                        </div>
                        <div class="form-group">
                            <strong>Hora Cierre Lv:</strong>
                            {{ $horario->hora_cierre_LV }}
                        </div>
                        <div class="form-group">
                            <strong>Dia Semana S:</strong>
                            {{ $horario->dia_semana_S }}
                        </div>
                        <div class="form-group">
                            <strong>Hora Apertura S:</strong>
                            {{ $horario->hora_apertura_S }}
                        </div>
                        <div class="form-group">
                            <strong>Hora Cierre S:</strong>
                            {{ $horario->hora_cierre_S }}
                        </div>
                        <div class="form-group">
                            <strong>Dia Semana Df:</strong>
                            {{ $horario->dia_semana_DF }}
                        </div>
                        <div class="form-group">
                            <strong>Hora Apertura Df:</strong>
                            {{ $horario->hora_apertura_DF }}
                        </div>
                        <div class="form-group">
                            <strong>Hora Cierre Df:</strong>
                            {{ $horario->hora_cierre_DF }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
