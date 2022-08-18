@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/swiper/swiper.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/restaurantShow.css') }}">
@endsection

@section('content')
    <!-- Swiper -->
    <div class="swiper-container">
        @if (count($restaurant->images) > 0)
        <div class="swiper-wrapper">
            @foreach ($restaurant->images as $image)
            <div class="swiper-slide">
                <a href="{{ Storage::url($image->url) }}" class="grid image-link">
                    <img src="{{ Storage::url($image->url) }}" alt="#" height="400"/>
                </a>
            </div>
            @endforeach
        </div>
        @else
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a href="{{ asset('img/slides/reserve-slide1.jpg') }}" class="grid image-link">
                    <img src="{{ asset('img/slides/reserve-slide1.jpg') }}" alt="#" />
                </a>
            </div>
            <div class="swiper-slide">
                <a href="{{ asset('img/slides/reserve-slide2.jpg') }}" class="grid image-link">
                    <img src="{{ asset('img/slides/reserve-slide2.jpg') }}" alt="#" />
                </a>
            </div>
            <div class="swiper-slide">
                <a href="{{ asset('img/slides/reserve-slide3.jpg') }}" class="grid image-link">
                    <img src="{{ asset('img/slides/reserve-slide3.jpg') }}" alt="#" />
                </a>
            </div>
            <div class="swiper-slide">
                <a href="{{ asset('img/slides/reserve-slide1.jpg') }}" class="grid image-link">
                    <img src="{{ asset('img/slides/reserve-slide1.jpg') }}" alt="#" />
                </a>
            </div>
            <div class="swiper-slide">
                <a href="{{ asset('img/slides/reserve-slide2.jpg') }}" class="grid image-link">
                    <img src="{{ asset('img/slides/reserve-slide2.jpg') }}" alt="#" />
                </a>
            </div>
            <div class="swiper-slide">
                <a href="{{ asset('img/slides/reserve-slide3.jpg') }}" class="grid image-link">
                    <img src="{{ asset('img/slides/reserve-slide3.jpg') }}" alt="#" />
                </a>
            </div>
        </div>
        @endif

        <!-- Add Pagination -->
        <div class="swiper-pagination swiper-pagination-white"></div>
        <!-- Add Arrows -->
        <div class="swiper-button-next swiper-button-white"></div>
        <div class="swiper-button-prev swiper-button-white"></div>
    </div>
    <!--============================= RESERVE A SEAT =============================-->
    <section class="reserve-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>{{ $restaurant->name }}</h1>
                    <p class="p-0">Tipos de comida:</p>
                    @foreach ($restaurant->foods as $food)
                        <p><span>{{ $food->food }}</span></p>
                    @endforeach
                </div>
                <!-- <div class="col-md-6">
                    <div class="reserve-seat-block">
                        <div class="reserve-rating">
                            <span>9.5</span>
                        </div>
                        <div class="review-btn">
                            <a href="#" class="btn btn-outline-danger">WRITE A REVIEW</a>
                            <span>34 reviews</span>
                        </div>
                        <div class="reserve-btn">
                            <div class="featured-btn-wrap">
                                <a href="#" class="btn btn-danger">RESERVE A SEAT</a>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <!--//END RESERVE A SEAT -->
    <!--============================= BOOKING DETAILS =============================-->
    <section class="light-bg booking-details_wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-8 responsive-wrap">
                    <div class="booking-checkbox_wrap">
                        <div class="booking-checkbox">
                            <p>
                                {{ $restaurant->description }}
                            </p>

                            <hr />
                        </div>
                        <div class="row">
                            <h5>Servicios</h5>
                            @foreach ($restaurant->services as $service)
                            <div class="col-md-4">
                                <label class="custom-checkbox">
                                    <i class="fab fa-accusoft"></i>
                                    <span class="custom-control-description">{{ $service->service }}</span>
                                </label>
                            </div>
                            @endforeach
                        </div>
                        <div class="row">
                            <h5>Eventos</h5>
                            @foreach ($restaurant->events as $event)
                            <div class="col-md-4">
                                <label class="custom-checkbox">
                                    <i class="fas fa-birthday-cake"></i>
                                    <span class="custom-control-description">{{ $event->event }}</span>
                                </label>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    {{-- Testimoniales --}}
                    <div class="booking-checkbox_wrap mt-4">
                        <h5>34 Reviews</h5>
                        <hr />
                        <div class="customer-review_wrap">
                            <div class="customer-img">
                                <img src="http://xsgames.co/randomusers/assets/avatars/female/3.jpg" width="78" alt="#" />
                                <p>Amanda G</p>
                                <span>::</span>
                            </div>
                            <div class="customer-content-wrap">
                                <div class="customer-content">
                                    <div class="customer-review">
                                        <h6>Best noodles in the Newyork city</h6>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span class="round-icon-blank"></span>
                                        <p>Reviewed 2 days ago</p>
                                    </div>
                                    <div class="customer-rating">8.0</div>
                                </div>
                                <p class="customer-text">
                                    {{-- I love the noodles here but it is so rare that I get to come
                                    here. Tasty Hand-Pulled Noodles is the best type of whole in
                                    the wall restaurant. The staff are really nice, and you
                                    should be seated quickly. I usually get the hand pulled
                                    noodles in a soup. House Special #1 is amazing and the lamb
                                    noodles are also great. If you want your noodles a little
                                    chewier, get the knife cut noodles, which are also amazing.
                                    Their dumplings are great dipped in their chili sauce. --}}

                                    Me encantan los fideos aquí, pero es tan raro que llegue a venir.
                                    aquí. Tasty Hand-Pulled Noodles es el mejor tipo de todo en
                                    el restaurante de la pared. El personal es muy agradable y usted
                                    debe sentarse rápidamente. Normalmente me tiran de la mano
                                    fideos en una sopa. House Special # 1 es increíble y el cordero
                                    los fideos también son geniales. Si quieres tus fideos un poco
                                    más masticable, consigue los fideos cortados con cuchillo, que también son increíbles.
                                    Sus albóndigas son geniales bañadas en su salsa de chile.


                                </p>
                                <p class="customer-text">
                                    {{-- I love how you can see into the kitchen and watch them make
                                    the noodles and you can definitely tell that this is a
                                    family run establishment. The prices are are great with one
                                    dish maybe being $9. You just have to remember to bring
                                    cash. --}}

                                    Me encanta cómo puedes ver la cocina y verlos hacer
                                    los fideos y definitivamente se puede decir que este es un
                                    establecimiento familiar. Los precios son geniales con uno
                                    plato tal vez $9. Solo tienes que acordarte de traer
                                    dinero.


                                </p>
                                <ul>
                                    <li>
                                        <img
                                            src="https://www.clara.es/medio/2021/12/16/que-comer-hoy-ideas_21beeb02_1200x630.jpg"
                                            width="160" height="90"
                                            alt="#"
                                        />
                                    </li>
                                    <li>
                                        <img
                                            src="https://www.cocinacaserayfacil.net/wp-content/uploads/2020/03/Platos-de-comida-que-pides-a-domicilio-y-puedes-hacer-en-casa-945x630.jpg"
                                            width="160" height="90"
                                            alt="#"
                                        />
                                    </li>
                                    <li>
                                        <img
                                            src="https://static-sevilla.abc.es/media/gurmesevilla/2012/01/comida-rapida-casera.jpg"
                                            width="160" height="90"
                                            alt="#"
                                        />
                                    </li>
                                </ul>
                                <span>28 people marked this review as helpful</span>
                                <a href="#"><span class="icon-like"></span>Helpful</a>
                            </div>
                        </div>
                        <hr />
                        <div class="customer-review_wrap">
                            <div class="customer-img">
                                <img src="https://xsgames.co/randomusers/assets/avatars/male/69.jpg" width="78" alt="#" />
                                <p>Kevin W</p>
                                <span>17 Reviews</span>
                            </div>
                            <div class="customer-content-wrap">
                                <div class="customer-content">
                                    <div class="customer-review">
                                        <h6>A hole-in-the-wall old school shop.</h6>
                                        <span class="customer-rating-red"></span>
                                        <span class="round-icon-blank"></span>
                                        <span class="round-icon-blank"></span>
                                        <span class="round-icon-blank"></span>
                                        <span class="round-icon-blank"></span>
                                        <p>Reviewed 3 months ago</p>
                                    </div>
                                    <div class="customer-rating customer-rating-red">2.0</div>
                                </div>
                                <p class="customer-text">
                                    {{-- The dumplings were so greasy...the pan-fried shrimp noodles
                                    were the same. So much oil and grease it was difficult to
                                    eat. The shrimp noodles only come with 3 shrimp (luckily the
                                    dish itself is cheap
                                    ) --}}

                                    Las albóndigas estaban tan grasientas... los fideos de camarones fritos
                                    somos lo mismo. Tanto aceite y grasa que era difícil de
                                    comer. Los fideos con camarones solo vienen con 3 camarones (por suerte el
                                    el plato en sí es barato)
                                </p>
                                <p class="customer-text">
                                    {{-- The beef noodle soup was okay. I added black vinegar into
                                    the broth to give it some extra flavor. The soup has bok
                                    choy which I liked - it's a nice textural element. The shop
                                    itself is really unclean (which is the case in many
                                    restaurants in Chinatown) They don't wipe down the tables
                                    after customers have eaten. If you peak into the kitchen
                                    many of their supplies are on the ground which is
                                    unsettling... --}}

                                    La sopa de fideos con carne estaba bien. Agregué vinagre negro a
                                    el caldo para darle un poco de sabor extra. La sopa tiene bok
                                    Choy, que me gustó, es un buen elemento de textura. La tienda
                                    en sí mismo es realmente impuro (que es el caso en muchos
                                    restaurantes en Chinatown) No limpian las mesas
                                    después de que los clientes hayan comido. Si llegas a la cocina
                                    muchos de sus suministros están en el suelo, lo cual es
                                    inquietante...

                                </p>
                                <span>10 people marked this review as helpful</span>
                                <a href="#"><span class="icon-like"></span>Helpful</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 responsive-wrap">
                    <div class="contact-info">
                        <img src="@if($restaurant->cover) {{ Storage::url($restaurant->cover) }} @else 'https://source.unsplash.com/1280x720/?food,food' @endif" height="300" alt="#" />
                        <div class="address">
                            <span class="icon-location-pin"></span>
                            <p>
                                {{ $restaurant->name }}<br /><br>
                                {{-- {{ $restaurant->website }}<br /> --}}
                                <span class="text-bold">Ubicados en:</span><br>
                                @foreach ($restaurant->locations as $location)
                                    > {{ $location->ubication->city  }} <br>
                                @endforeach
                            </p>
                        </div>
                        <div class="address">
                            <p><span class="icon-screen-smartphone">LLamanos</span></p>
                            <p>> {{ $restaurant->phone }}</p>
                        </div>
                        <div class="address">
                            <p><span class="icon-link">Pagina Web</span></p>
                            <p>> {{ $restaurant->website }}<br /></p>
                        </div>

                      
                        <div class="address"><p>
                        <span class="text-bold">Redes Sociales:</span>  
                        <br>
                        @foreach ($restaurant->socials as $socials)
                            > {{ $socials->social_network}} <br>
                        @endforeach
                        @foreach ($restaurant->socials as $socials)
                            > {{ $socials->user}} <br>
                        @endforeach
                        @foreach ($restaurant->socials as $socials)
                            > {{ $socials->url}} <br>
                        @endforeach
                    </p>
                        </div>  
                        {{-- <div class="address">
                            <span class="icon-clock"></span>
                            <p>
                                Mon - Sun 09:30 am - 05:30 pm <br />
                                <span class="open-now">OPEN NOW</span>
                            </p>
                        </div> --}}
                        <!-- <a href="#" class="btn btn-outline-danger btn-contact"
                            >SEND A MESSAGE</a
                        > -->
                    </div>
                    <div class="follow">
                        <div class="follow-img">
                            <h5>Administrador Restaurante</h4>
                            <h6>{{ $restaurant->user->name }}</h6>
                            <span>{{ $restaurant->user->email }}</span>
                        </div>
                        <ul class="social-counts">
                            <li>
                                <h6>26</h6>
                                <span>Listings</span>
                            </li>
                            <li>
                                <h6>326</h6>
                                <span>Followers</span>
                            </li>
                            <li>
                                <h6>12</h6>
                                <span>Followers</span>
                            </li>
                        </ul>
                        <a href="#">FOLLOW</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="{{ asset('js/swiper/swiper.min.js') }}"></script>
    <script src="{{ asset('js/magnific-popup.js') }}"></script>
    <script>
        var swiper = new Swiper(".swiper-container", {
            slidesPerView: 3,
            slidesPerGroup: 3,
            loop: true,
            loopFillGroupWithBlank: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
    <script>
        if ($(".image-link").length) {
            $(".image-link").magnificPopup({
                type: "image",
                gallery: {
                    enabled: true,
                },
            });
        }
        if ($(".image-link2").length) {
            $(".image-link2").magnificPopup({
                type: "image",
                gallery: {
                    enabled: true,
                },
            });
        }
    </script>
@endsection
