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
    return view('welcome');
});
Route::get('/long', function () {
    return view('long');
});
Route::get('/{firstname}/{lastname}', function ($firstname,$lastname) {
    return "Welcome $firstname $lastname";
});
Route::get('/{title}', function ($title) {
    return "this is $title";
})->where('title', '[A-Za-z]+');
Route::get('/listeFilms', function () {
    return "Liste des films";
});

