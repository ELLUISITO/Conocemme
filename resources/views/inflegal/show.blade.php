@extends('layouts.app')

@section('template_title')
    {{ $inflegal->name ?? 'Show Inflegal' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Inflegal</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('inflegals.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Restaurantes:</strong>
                            {{ $inflegal->id_restaurantes }}
                        </div>
                        <div class="form-group">
                            <strong>Regimen Tributario:</strong>
                            {{ $inflegal->regimen_tributario }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo Persona:</strong>
                            {{ $inflegal->tipo_persona }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo Documento:</strong>
                            {{ $inflegal->tipo_documento }}
                        </div>
                        <div class="form-group">
                            <strong>Numero Documento:</strong>
                            {{ $inflegal->numero_documento }}
                        </div>
                        <div class="form-group">
                            <strong>Razon Social:</strong>
                            {{ $inflegal->razon_social }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
