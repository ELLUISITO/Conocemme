@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">

            <div class="">
                <div class="row">
                    <div>
                        <div>
                            <h3 class="mb-0">Resultados de la búsqueda "{{ $search }}"</h3>
                            @isset($message)
                                <h1 class="error_busqueda">{{ $message }}</h1>
                            @endisset
                            <div class="owl-stage row justify-content-center">

                                @isset($restaurants)
                                @foreach ($restaurants as $r)
                                <div class="col-md-3  m-0">
                                    <div class="card mb-3 ">


                                        <div class="bg-image hover-overlay ripple position-relative"
                                            data-mdb-ripple-color="light">

                                            <div class="bg-image hover-overlay ripple position-absolute rounded-circle d-flex justify-content-center align-items-center"
                                                style="left: 88%; top: 4%; z-index: 2 ; height: 25px; width: 25px; background-color: rgb(255, 255, 255);"
                                                data-mdb-ripple-color="red">

                                                <a href="#!">
                                                    <!-- <i class="fas fa-heart text-danger pt-2"></i> -->
                                                    <i class="far fa-heart text-danger pt-2"></i>
                                                </a>
                                            </div>

                                            <img src="" class="img-fluid" />

                                            <a href="#!">
                                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)">
                                                </div>
                                            </a>
                                        </div>

                                        <div class="card-body">
                                            <h5 class="card-title">{{ $r->name }}</h5>

                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>

                                            <p class="card-text">
                                                {{ $food->food }}
                                            </p>
                                            <button type="button" class="btn btnOrderOnline ">Order Online</button>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @endisset

                                @isset($locations)
                                @foreach ($locations as $l)
                                <div class="col-md-3  m-0">
                                    <div class="card mb-3 ">


                                        <div class="bg-image hover-overlay ripple position-relative"
                                            data-mdb-ripple-color="light">

                                            <div class="bg-image hover-overlay ripple position-absolute rounded-circle d-flex justify-content-center align-items-center"
                                                style="left: 88%; top: 4%; z-index: 2 ; height: 25px; width: 25px; background-color: rgb(255, 255, 255);"
                                                data-mdb-ripple-color="red">

                                                <a href="#!">
                                                    <!-- <i class="fas fa-heart text-danger pt-2"></i> -->
                                                    <i class="far fa-heart text-danger pt-2"></i>
                                                </a>
                                            </div>

                                            <img src="" class="img-fluid" />

                                            <a href="#!">
                                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)">
                                                </div>
                                            </a>
                                        </div>

                                        <div class="card-body">
                                            <h5 class="card-title">{{ $l->restaurant->name }}</h5>

                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>

                                            <p class="card-text">
                                                {{ $ubication->city }}
                                            </p>
                                            <button type="button" class="btn btnOrderOnline ">Order Online</button>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @endisset

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
