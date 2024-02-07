<?php

use App\Models\City;
use App\Models\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Search provinces by ID
Route::get('/search/provinces', function (Request $request) {
    $provinceId = $request->input('id');
    $provinces = Province::where('province_id', $provinceId)->get();

    return response()->json($provinces);
});

// Search cities by ID
Route::get('/search/cities', function (Request $request) {
    $cityId = $request->input('id');
    $cities = City::where('city_id', $cityId)->get();

    return response()->json($cities);
});
