<?php

use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\SearchController;
use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Middleware\Authenticate as Middleware;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/restaurant/{restaurant}', [HomeController::class, 'show'])->name('restaurant');
Route::get('/food', [SearchController::class, 'search'])->name('search');

Auth::routes();

// Route::get('/actualizar', function () {
//     return view('restaurante.Registrorestaurante.actualizar');
// })->middleware('auth');

// Route::get('/registro', function () {
//     return view('auth2.login_register');
// });

// Route::get('/registroRestaurante', function () {
//     return view('restaurante.Registrorestaurante.registro');
// })->middleware('auth');


// Route::get('/busquedaRestaurante', function () {
//     return view('restaurante.Registrorestaurante.busqueda');
// });

// Route::get('/busquedaRestaurante2','App\Http\Controllers\ServicioController@index2');

// Route::resource('restaurantes', App\Http\Controllers\RestauranteController::class)->middleware('auth');
// Route::resource('horarios', App\Http\Controllers\HorarioController::class)->middleware('auth');
// Route::resource('redessociales', App\Http\Controllers\RedessocialeController::class)->middleware('auth');
// Route::resource('servicios', App\Http\Controllers\ServicioController::class);
// Route::resource('tiposcomidas', App\Http\Controllers\TiposcomidaController::class)->middleware('auth');
// Route::resource('tiposocasiones', App\Http\Controllers\TiposocasioneController::class)->middleware('auth');
// Route::resource('ubicaciones', App\Http\Controllers\UbicacioneController::class)->middleware('auth');
// Route::resource('inflegals', App\Http\Controllers\InflegalController::class)->middleware('auth');
// Route::resource('replegals', App\Http\Controllers\ReplegalController::class)->middleware('auth');

// Route::resource('busquedas', App\Http\Controllers\BusquedaController::class)->middleware('auth');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

