@extends('layouts.admin')

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.css"/>

    <style>
        .img-cont{
            position: relative;
        }
        .btn-eliminar{
            position: absolute;
            top: 40%;
            left: 40%;
            z-index: 99999;
            transition: all 0.5s;
            opacity: 0;
        }
        .img-cont:hover .btn-eliminar{
            opacity: 1;
        }
    </style>
@endsection

@section('content')
<div class="container">

    <h1>Gestiona las imagenes del restaurante: {{ $restaurant->name }}</h1>
    @if($restaurant->images)
    <div class="row">

        @foreach ($restaurant->images as $image)
        <div class="col-md-3 mb-3 img-cont">
            <img src="{{ Storage::url($image->url) }}" alt="{{ $restaurant->name }}" class="img-fluid">
            <form action="{{ route('admin.images.destroy', $image) }}" method="POST">
            @csrf
            @method('delete')
            <button type="submit" class="btn-sm btn-danger btn-eliminar">Eliminar</butt>
            </form>
        </div>

        @endforeach
    </div>
    @endif
    <div class="mt-5">
        <h2>Agrega nuevas imagenes</h2>
        <form action="{{ route('admin.images.store') }}"
            method="POST"
            enctype="multipart/form-data"
            class="dropzone" id="my-awesome-dropzone">

            <input type="text" name="restaurant_id" hidden value="{{$restaurant->id}}">

        </form>
        <button onclick="window.location.reload()" type="submit" class="btn btn-success mt-3">Guardar imágenes</button>
    </div>
</div>
@endsection

@section('javascript')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.js"></script>
    <script>
        const token = "{{ csrf_token() }}";
        console.log('token: ' + token);
        Dropzone.options.myAwesomeDropzone = {
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            dictDefaultMessage: "Arrastre y suelte imagenes aquí ó haga clic en el recuadro para abrir el administrador de archivos.",
            acceptedFiles: "image/*"
        };
    </script>
@endsection
