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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/auth', function () {
    return view('auth');
})->name('auth');
Route::get('/homeco', function () {
    return view('homeco');
})->name('homeco');
Route::get('/homedisc', function () {
    return view('homedisc');
})->name('homedisc');
Route::get('profile', function () {
    return view('profile');
})->name('profile');
Route::get('tableau', function () {
    return view('tableau');
})->name('tableau');
Route::get('/history', function () {
    return view('historique');
})->name('history');
Route::get('admins', function () {
    return view('admins');
});



Route::get('formu', function () {
    return view('formulaire');
})->name('formu');

Route::get('formuUp/{film}', function (int $id) {
    return view('formulaireUpdate',['id'=>$id]);
})->name('formuUp');



Route::get('info', function () {
    return view('info')->name(info);
});


Route::post('film', 'App\Http\controllers\listeMediaController@addFilm');
Route::get('tableau', 'App\Http\controllers\listeMediaController@getListeMedias')->name('tableau');
Route::get('film/{film}', 'App\Http\controllers\listeMediaController@getFilmById')->name('film');
Route::put('formuUp/film/{id}', 'App\Http\controllers\listeMediaController@updateFilm')->name('updatefilm');
Route::delete('film/{film}', 'App\Http\controllers\listeMediaController@destroy')->name('films.destroy');



