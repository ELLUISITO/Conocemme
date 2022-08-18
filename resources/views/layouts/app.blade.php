<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Conoceme | @yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    @yield('fonts')

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet" />
    <link href="{{ asset('css/restaurantStyle.css') }}" rel="stylesheet">
    <link href="{{ asset('css/principal_estilos.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    @yield('styles')

</head>
<body>
    <div id="app">
        <header>
            @include('layouts.includes.header')
        </header>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    {{-- <footer>
        @include('layouts.includes.footer')
    </footer> --}}

    <!-- Scripts -->

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
    </script>
    @yield('scripts')

    <script>
        let matchmedia = window.matchMedia("(min-width: 768px)");

        window.addEventListener('resize', () => {
            let ele = document.querySelectorAll('.coll');
            ele.forEach(elem => {
                if (!matchmedia.matches) {
                    elem.classList.replace("collapse.show", "collapse")
                } else {
                    elem.classList.replace("collapse", "collapse.show")
                }
            })
        });



        let index = 0;

        function collapseplus(ele) {
            let svgplus = ele.querySelector(".svgplus");
            if (index == 0) {
                index = 1;
                svgplus.innerHTML = `<path d="M2 13.111v-2.222h20v2.222z"></path>`;
            } else {
                svgplus.innerHTML =
                    `<path d="M13.111 22h-2.222v-8.889H2v-2.222h8.889V2h2.222v8.889H22v2.222h-8.889z"></path>`;
                index = 0;
            }
        }

        function displaynone(ele) {
            ele.style.display = "none";
        }

    </script>
</body>
</html>
