<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', "App\Http\Controllers\Sample@index");

Route::get('/a', function () {
    // broadcast(new \App\Events\PublicEvent);
    return view('a');
});

Route::get('/public-event', function(){
    event(new \App\Events\PublicEvent);
    return 'public';
});