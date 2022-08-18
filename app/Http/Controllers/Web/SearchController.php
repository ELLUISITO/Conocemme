<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Food;
use App\Models\Ubication;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search (Request $request) {

        $search = $request->search;

        $food = Food::where('food', 'LIKE', '%' . $search .'%')->first();
        $ubication = Ubication::where('city', 'LIKE', '%' . $search .'%')->first();


        if($food) {
            $restaurants = $food->restaurants;

            return view('pages.search', compact('restaurants', 'food', 'search'));

        }
        else if ($ubication) {
            $locations = $ubication->locations;

            return view('pages.search', compact('locations', 'ubication', 'search'));

        }
        else {
            $message = 'No se encontraron resultados en la búsqueda.';
            return view('pages.search', compact('message', 'search'));

        }



    }
}
