<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Models\Agent;
use App\Models\Event;
use App\Models\Food;
use App\Models\Legal;
use App\Models\Location;
use App\Models\Restaurant;
use App\Models\Service;
use App\Models\Social;
use App\Models\Ubication;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restaurants = Restaurant::where('user_id', auth()->user()->id)->latest('id')->get();
        return view('admin.restaurants.index', compact('restaurants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services = Service::all();
        $events = Event::all();
        $foods = Food::all();
        $ubications = Ubication::all();
        return view('admin.restaurants.create', compact('services', 'events', 'foods', 'ubications'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $restaurant = Restaurant::create([
            'user_id' => auth()->user()->id,
            'name' => $request->name,
            'description' => $request->description,
            'phone' => $request->phone,
            'website' => $request->website,
        ]);

        if($request->file('cover')){
            $cover = Storage::put('public/img/cover', $request->file('cover'));
            $restaurant->cover = $cover;
            $restaurant->save();
        }

        $restaurant->services()->attach($request->services);
        $restaurant->events()->attach($request->events);
        $restaurant->foods()->attach($request->food);

        $location = Location::create([
            'name' => $request->location_name,
            'address' => $request->address,
            'neighborhood' => $request->neighborhood,
            'restaurant_id' => $restaurant->id,
            'ubication_id' => $request->city,
        ]);

        $social = Social::create([
            'social_network' => $request->social_network,
            'url' => $request->url,
            'user' => $request->user,
            'restaurant_id' => $restaurant->id,
        ]);

        $legal = Legal::create([
            'tax' => $request->tax,
            'person_type' => $request->person_type,
            'document_type' => $request->document_type,
            'document_number' => $request->document_number,
            'business_name' => $request->business_name,
            'restaurant_id' => $restaurant->id,
        ]);

        $agent = Agent::create([
            'name' => $request->agent_name,
            'last_name' => $request->agent_last_name,
            'document_type' => $request->agent_document_type,
            'document_number' => $request->agent_document_number,
            'restaurant_id' => $restaurant->id,
        ]);

        return redirect()->route('admin');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Restaurant $restaurant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Restaurant $restaurant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Restaurant $restaurant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Restaurant $restaurant)
    {
        $restaurant->delete();

        return redirect()->route('admin.restaurants.index');
    }
}
