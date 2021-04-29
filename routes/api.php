<?php

use Illuminate\Http\Request;
use App\Region;
use App\Comuna;
use App\Provincia;
use App\Direccion;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('regiones', function() {
    return Region::all();
});

Route::get('comunas', function() {
    return Comuna::all();
});

Route::get('provincias', function() {
    return Region::all();
});

Route::get('region/{id}', function($id) {
    return Region::find($id)->provincias;
});

Route::get('provincia/{id}', function($id) {
    return Provincia::find($id)->comunas;
});

Route::get('calles/{id}', function($id) {
    return Comuna::find($id)->direcciones;
});
