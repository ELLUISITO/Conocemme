@extends('layouts.app')

@section('template_title')
    {{ $restaurante->name ?? 'Show Restaurante' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Restaurante</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('restaurantes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Usuarios:</strong>
                            {{ $restaurante->id_usuarios }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Restauarante:</strong>
                            {{ $restaurante->nombre_restauarante }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $restaurante->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $restaurante->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Pagina Web:</strong>
                            {{ $restaurante->pagina_web }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
