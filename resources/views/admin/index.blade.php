@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Administra tus restaurantes</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <ul>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.restaurants.create') }}">REGISTRA TU RESTAURANTE AQUI</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.restaurants.index') }}">MIRA TUS RESTAURANTES AQUÍ</a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
