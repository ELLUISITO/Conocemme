@extends('layouts.app')

@section('template_title')
    {{ $tiposcomida->name ?? 'Show Tiposcomida' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Tiposcomida</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tiposcomidas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Restaurantes:</strong>
                            {{ $tiposcomida->id_restaurantes }}
                        </div>
                        <div class="form-group">
                            <strong>Tipos Comida:</strong>
                            {{ $tiposcomida->tipos_comida }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
