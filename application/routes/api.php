<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});

Route::get('clear-route', function() {
    Artisan::call('route:clear');
    return "Route is cleared";
});

Route::get('route-list', function() {
    Artisan::call('route:list');
    return Artisan::output();;
});