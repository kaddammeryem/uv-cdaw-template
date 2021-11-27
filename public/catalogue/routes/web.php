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

Route::get('comptes', function() {
    // Réservé aux utilisateurs authentifiés
})->middleware('auth');

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
Route::get('details', function () {
    return view('details');
})->name('details');

Route::get('ex1', function () {
    return view('ex1');
});
Route::get('ex4', function () {
    return view('ex4Event');
});
Route::get('ex2', function () {
    return view('ex2');
});
Route::get('ex3', function () {
    return view('ex3');
});

Route::get('/playlist', function () {
    return view('playlist');
})->name('playlist');

Route::group(['middleware' => ['web']], function () {
    Route::get('/homeco', function () {
        return view('homeco');
    })->name('homeco');
    
});

Route::get('formu', function () {
    return view('formulaire');
})->name('formu');

Route::get('formuUp/{film}', function (int $id) {
    return view('formulaireUpdate',['id'=>$id]);
})->name('formuUp');


Route::get('comm', function () {
    return view('comments');
});


Route::get('info', function () {
    return view('info')->name('info');
});


//Route::post('film', 'App\Http\controllers\listeMediaController@addFilm');
Route::get('tableau', 'App\Http\controllers\listeMediaController@getListeMedias')->name('tableau');
Route::get('film/{film}', 'App\Http\controllers\listeMediaController@getFilmById')->name('film');
Route::put('formuUp/film/{id}', 'App\Http\controllers\listeMediaController@updateFilm')->name('updatefilm');
//Route::delete('film/{film}', 'App\Http\controllers\listeMediaController@destroy')->name('films.destroy');

Route::get('auth',function(){
    return view('auth');
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
