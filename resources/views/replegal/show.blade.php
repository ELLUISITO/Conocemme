@extends('layouts.app')

@section('template_title')
    {{ $replegal->name ?? 'Show Replegal' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Replegal</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('replegals.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Restaurantes:</strong>
                            {{ $replegal->id_restaurantes }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $replegal->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $replegal->apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo Documento:</strong>
                            {{ $replegal->tipo_documento }}
                        </div>
                        <div class="form-group">
                            <strong>Numero Documento:</strong>
                            {{ $replegal->numero_documento }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
