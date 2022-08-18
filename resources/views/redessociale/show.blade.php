@extends('layouts.app')

@section('template_title')
    {{ $redessociale->name ?? 'Show Redessociale' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Redessociale</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('redessociales.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Restaurantes:</strong>
                            {{ $redessociale->id_restaurantes }}
                        </div>
                        <div class="form-group">
                            <strong>Red Social:</strong>
                            {{ $redessociale->red_social }}
                        </div>
                        <div class="form-group">
                            <strong>Usuario Red Social:</strong>
                            {{ $redessociale->usuario_red_social }}
                        </div>
                        <div class="form-group">
                            <strong>Enlace Red Social:</strong>
                            {{ $redessociale->enlace_red_social }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
