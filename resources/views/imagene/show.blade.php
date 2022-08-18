@extends('layouts.app')

@section('template_title')
    {{ $imagene->name ?? 'Show Imagene' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Imagene</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('imagenes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Restaurantes:</strong>
                            {{ $imagene->id_restaurantes }}
                        </div>
                        <div class="form-group">
                            <strong>Res Ruta:</strong>
                            {{ $imagene->res_ruta }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
