<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function create (Restaurant $restaurant) {
        return view('admin.restaurants.images', compact('restaurant'));
    }

    public function store (Request $request) {


        $image = Storage::put('public/img/gallery', $request->file('file'));

        Image::create([
            'url' => $image,
            'imageable_type' => Restaurant::class,
            'imageable_id' => $request->restaurant_id
        ]);

        //return redirect()->route('admin.restaurants.index');
        return response()->json([
            'message' => $request
        ]);
    }

    public function destroy (Image $image) {

        $image->delete();

        return redirect()->route('admin.restaurants.index');
    }
}
