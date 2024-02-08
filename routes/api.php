<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\ProvinceCityController;
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

Route::controller(AuthenticationController::class)->group(function () {
    Route::post('login', 'login');
});

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/search/provinces', [ProvinceCityController::class, 'getProvinces']);
    Route::get('/search/cities', [ProvinceCityController::class, 'getCities']);
});
