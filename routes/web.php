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

Route::get('/', function () {
    $comics = config('comics');
    $data = [
        'comics' => $comics
    ];
    return view('home', $data);
});

Route::get('/single/{id}', function ($id) {
    $comics = config('comics');
    $fumetto = $comics[$id];
    $data = [
        'fumetto' => $fumetto
    ];
    return view('single', $data);
})->name('comic-details');
