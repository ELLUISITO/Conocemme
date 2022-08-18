@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <li class="nav-item">
                    <a class="nav-link" href="{{ route('restaurantes.index') }}">{{ __('Restaurantes') }}</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{ route('horarios.index') }}">{{ __('Horarios') }}</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{ route('redessociales.index') }}">{{ __('Redes Sociales') }}</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{ route('servicios.index') }}">{{ __('Servicios') }}</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{ route('tiposcomidas.index') }}">{{ __('Tipos Comidas') }}</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{ route('tiposocasiones.index') }}">{{ __('Tipos Ocaciones') }}</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{ route('ubicaciones.index') }}">{{ __('Ubicaciones') }}</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{ route('inflegals.index') }}">{{ __('Informacion Legal') }}</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{ route('replegals.index') }}">{{ __('Representante Legal') }}</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('replegals.index') }}">{{ __('Representante Legal') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('registroRestaurante') }}">REGISTRA TU RESTAURANTE AQUI</a>
                            </li>

                    <input type="submit" class="btn" value="Registrar Restaurante :D" />


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
