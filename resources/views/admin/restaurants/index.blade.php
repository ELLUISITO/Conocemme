@extends('layouts.admin')

@section('content')
    <h1 class="text-center">Listado de tus restaurantes</h1>
    <div class="container">
        @if (count($restaurants) > 0)
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre Restaurante</th>
                <th scope="col">Descripción</th>
                <th scope="col">Ubicación</th>
                <th scope="col">Acciones</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($restaurants as $restaurant)
                    <tr>
                        <th scope="row">{{ $restaurant->id }}</th>
                        <td>{{ $restaurant->name }}</td>
                        <td>{{ $restaurant->description }}</td>
                        <td>
                            @foreach ($restaurant->locations as $location)
                            <p>{{ $location->ubication->city }}</p>
                            @endforeach
                        </td>
                        <td width="120px">
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('restaurant', $restaurant) }}" class="btn-sm btn-info text-white">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ route('admin.images.create', $restaurant) }}" class="btn-sm btn-secondary text-white">
                                    <i class="fas fa-image"></i>
                                </a>
                                <form action="{{ route('admin.restaurants.destroy', $restaurant) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn-sm btn-danger btn-eliminar"><i class="fas fa-trash-alt"></i></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>

          @else
          <div class="col-auto row justify-content-center">
            <h5 class="text-center">Aún no tienes restaurantes registrados</h5>
            <a href="{{ route('admin.restaurants.create') }}" class="btn btn-primary col-auto">
                Crea tu primer restaurante
            </a>
          </div>
          @endif
    </div>
@endsection
