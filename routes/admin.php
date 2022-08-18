<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\RestaurantController;
use Illuminate\Support\Facades\Route;


Route::get('', [HomeController::class, 'index'])->name('admin');
Route::resource('restaurants', RestaurantController::class)->names('admin.restaurants');
Route::get('images/{restaurant}', [ImageController::class, 'create'])->name('admin.images.create');
Route::post('images', [ImageController::class, 'store'])->name('admin.images.store');
Route::delete('images/{image}', [ImageController::class, 'destroy'])->name('admin.images.destroy');
