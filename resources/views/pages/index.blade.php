@extends('layouts.app')

    @section('fonts')
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    @endsection

    @section('content')
        {{-- Formulario de búsqueda --}}
        <form class="search-banner" method="GET" action="{{route ('search')}}">
            <div class="wrapper no-padding">
                <div class="search-wrapper">
                    <div class="search-bubble">
                        <button type="submit"><i class="fas fa-search"></i></button>
                        <input type="text" name="search" placeholder="Busca tu ciudad o el tipo de comida" >
                    </div>
                </div>
            </div>
        </form>

        {{-- Restaurantes recientes --}}
        <section class="vip-member">
            <div class="wrapper">
                <h2>Restaurantes destacados</h2>
                <p>Listado de restaurantes registrados</p>
                <div class="main-carousel">
                    @foreach ($restaurants as $restaurant)
                    <div class="carousel-cell">
                        <div class="carousel-pic-default vip-pic-1"
                            style="background-image: url(
                                @if($restaurant->cover) {{ Storage::url($restaurant->cover) }}
                                @else 'https://source.unsplash.com/1280x720/?desserts,desserts'
                                @endif)">
                            <div class="vip-logo"></div>
                            <button class="like-heart">
                                <i class="far fa-heart"></i>
                            </button>
                        </div>


                        <a href="{{ route('restaurant', $restaurant) }}">
                            <h4>{{ $restaurant->name }}</h4>
                        </a>
                        <div class="review-dots">

                            @foreach ($restaurant->locations as $location)
                            <span>{{ $location->ubication->city }}</span>
                        @endforeach
                        </div>
                        @foreach ($restaurant->foods as $food)
                                <span class="second-text">
                                    {{ $food->food }}
                                </span>
                            @endforeach
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- Tipos de comida --}}
        <section class="home-rentals">
            <div class="wrapper">
                <div class="rentals-wrapper grid">
                    <h2>Tipos de comida</h2>
                    <p>Toda la variedad de comidas la encuentras en nuestras categorías.</p>
                    <div class="rentals-carousel">
                        @foreach ($foods as $food)
                        <div class="carousel-cell-rentals">
                            <div class="carousel-pic-rentals rentals-pic-1" style="background-image: url('https://source.unsplash.com/1280x720/?food,food');"></div>
                            <h4>{{ $food->food }}</h4>
                            <span class="rentals-amount">{{ $food->restaurants->count() }} Restaurantes</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        {{-- Servicios --}}
        <section class="more-to-explore">
            <div class="wrapper">
                <div class="explore-wrapper">
                    <h2>Nuestros servicios más populares</h2>
                    <div class="explore-carousel">
                        @foreach ($services as $service)
                            <div class="carousel-cell-explore">
                                <div class="carousel-pic-explore" style="background-image: url('https://source.unsplash.com/1280x720/?arts-culture,arts-culture');">
                                    <button class="like-heart">
                                        <i class="far fa-heart"></i>
                                    </button>
                                </div>
                                <h4>{{ $service->service }}</h4>
                                <span class="px-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. .</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        {{-- Registrar restaurant --}}
        <section class="hire-banner">
            <div class="wrapper">
                <div class="hire-banner-wrapper grid">
                    <div class="hire-text-wrapper grid">
                        <div class="hire-text">
                            <h2>¿Aún no registras tú restaurante? ¿Qué esperas?
                            </h2>
                        </div>
                        <div class="hire-button grid">
                            <button onclick="location.href='/admin'">Registralo aquí</button>
                        </div>
                    </div>
                    <div class="hire-pic-wrapper hire-pic"></div>
                </div>
            </div>
        </section>

        {{-- Eventos --}}
        <section class="destinations">
            <div class="wrapper">
                <h2 class="destinations-header">Eventos que ofrecen los restaurantes</h2>
                <div class="destinations-carousel">
                    @foreach ($events as $event)
                        <div class="carousel-cell-destinations">
                            <div class="carousel-pic-default destinations-pic" style="background-image: url('https://source.unsplash.com/1280x720/?food-drink,food-drink');">
                                <div class="destinations-text">
                                    <p>{{ $event->event }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="carousel-cell-destinations">
                        <div class="carousel-pic-default destinations-pic destinations-pic-2">
                            <div class="destinations-text">
                                <p>Punta Cana, Dominican Republic</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-cell-destinations">
                        <div class="carousel-pic-default destinations-pic destinations-pic-3">
                            <div class="destinations-text">
                                <p>Maui, HI</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-cell-destinations">
                        <div class="carousel-pic-default destinations-pic destinations-pic-4">
                            <div class="destinations-text">
                                <p>Orlando, FL</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-cell-destinations">
                        <div class="carousel-pic-default destinations-pic destinations-pic-5">
                            <div class="destinations-text">
                                <p>Sedona, AZ</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-cell-destinations">
                        <div class="carousel-pic-default destinations-pic destinations-pic-6">
                            <div class="destinations-text">
                                <p>Cancun, Mexico</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-cell-destinations">
                        <div class="carousel-pic-default destinations-pic destinations-pic-7">
                            <div class="destinations-text">
                                <p>New York City, NY</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-cell-destinations">
                        <div class="carousel-pic-default destinations-pic destinations-pic-8">
                            <div class="destinations-text">
                                <p>Las Vegas, NV</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    @endsection

    @section('scripts')
        <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
        <script src="{{ asset('js/flickity.js') }}" defer></script>
    @endsection

