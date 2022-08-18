<div class=" shadow-2 sticky-top bg-light">
    <div class="container-fluid">
        <nav class="navbar navbar-light navbar-expand-md">
            <div class="container-fluid col-md-3 ">
                <a class="navbar-brand" href="/">
                    {{-- <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/02/TripAdvisor_Logo.svg/1024px-TripAdvisor_Logo.svg.png" width="160" alt="Logo"> --}}
                    {{-- <img src="https://drive.google.com/file/d/158MFDC_343mBdwysMuykn1Jy2_8QSaV6/view?usp=sharing" width="160" alt="Logo"> --}}
                    <img src="{{ asset('img/logo.png') }}" width="140">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="container-fluid col-md-5">

                <form class="d-md-flex d-none col-md-12" method="GET" action="{{route ('search')}}">
                    <div class="input-group ">
                        <button class="btn btn-outline-dark" type="submit" id="button-addon1"><i
                                class="fas fa-search"></i></button>
                        <input type="text" name="search" class="form-control inbSearch" placeholder="Busca tu ciudad o el tipo de comida"
                            aria-label="Example text with button addon" aria-describedby="button-addon1" style="border-left: transparent;">
                    </div>
                </form>

            </div>
            <div class="container-fluid col-md-4">
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav me-0 mb-2 mb-lg-0">
                        <li class="nav-item d-md-none d-flex ">
                            <form class="d-md-none d-flex">
                                <div class="input-group mb-3">
                                    <button class="btn btn-outline-dark" type="button" id="button-addon1"><i
                                            class="fas fa-search fs-7"></i></button>
                                    <input type="text" class="form-control" placeholder=""
                                        aria-label="Example text with button addon" aria-describedby="button-addon1">
                                </div>
                            </form>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link d-flex " aria-current="page" href="#"><span class="ps-2" > Review</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex" href="#"><span class="ps-2"> Trips</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex" href="#"><span class="ps-2">Alerts</span></a>
                        </li> --}}
                        <li class="nav-item">
                            @guest
                                @if (Route::has('login'))
                                <li class="nav-item">
                                    <button type="button" class="btn btn-dark btn-rounded" onclick="location.href='/login'">
                                        Iniciar sesión
                                    </button>
                                </li>
                            
                                @endif
                            @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('admin') }}">
                                        Dashboard
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Salir
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
