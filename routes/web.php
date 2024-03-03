<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
//    Route::get('middleware', function() {
    $collection = collect(Route::getRoutes())->map(function ($r) {
        if (isset($r->action['middleware']))
            return $r->action['middleware'];
    })->flatten();
    return array_unique($collection->toArray());
//    });
//    return view('welcome');
});
