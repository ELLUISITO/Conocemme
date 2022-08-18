@extends('layouts.app')

@section('template_title')
    {{ $tiposocasione->name ?? 'Show Tiposocasione' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Tiposocasione</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tiposocasiones.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Restaurantes:</strong>
                            {{ $tiposocasione->id_restaurantes }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo Ocasion:</strong>
                            {{ $tiposocasione->tipo_ocasion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
