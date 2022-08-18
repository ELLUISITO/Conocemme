<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Food;
use App\Models\Restaurant;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index () {
        $restaurants = Restaurant::take(10)->orderBy('id', 'desc')->get();
        $foods = Food::take(6)->get();
        $services = Service::take(3)->get();
        $events = Event::all();

        return view('pages.index', compact('restaurants', 'foods', 'services', 'events'));
    }

    public function show(Restaurant $restaurant) {
        return view('pages.restaurant', compact('restaurant'));
    }
}
