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

Route::middleware('auth')->group(function () {
    Route::get('homeco', 'App\Http\controllers\listeMediaController@getListeMediasCo')->name('homeco');
    Route::get('details/{id}', 'App\Http\controllers\listeMediaController@getDetails')->name('details');
    Route::get('addfav/{film}', 'App\Http\controllers\listeMediaController@addFav')->name('addfav');
    Route::get('delfav/{film}', 'App\Http\controllers\listeMediaController@delFav')->name('delfav');
    Route::get('addcomment/{contenu}/{film}', 'App\Http\controllers\listeMediaController@addComment')->name('addcomment');
    Route::get('delcomment/{film}', 'App\Http\controllers\listeMediaController@delComment')->name('delcomment');
    Route::get('addhistory/{film}', 'App\Http\controllers\listeMediaController@addHistory')->name('addhistory');
    Route::get('delhistory/{film}', 'App\Http\controllers\listeMediaController@delHistory')->name('delhistory');
    Route::get('addtoplaylist/{playlist}/{film}', 'App\Http\controllers\listeMediaController@addToPlaylist')->name('addtoplaylist');
    Route::get('addplaylist/{name}/{film}', 'App\Http\controllers\listeMediaController@addPlaylist')->name('addplaylist');
    Route::get('mediaplaylist/{playlist}', 'App\Http\controllers\listeMediaController@getPlaylistMedia')->name('mediaplaylist');
    Route::get('delplaylist/{playlist}', 'App\Http\controllers\listeMediaController@delPlaylist')->name('delplaylist');
    Route::get('delfromplaylist/{playlist}/{film}', 'App\Http\controllers\listeMediaController@delFromPlaylist')->name('delfromplaylist');

    Route::get('details', function () {
        return view('details');
    })->name('detail');
   
    Route::get('playlistdetails', 'App\Http\controllers\listeMediaController@getPlaylistDetails')->name('playlistdetails');

    Route::get('favorites','App\Http\controllers\listeMediaController@getListeFavorites')->name('favorites');
    Route::get('playlist','App\Http\controllers\listeMediaController@getListePLaylist')->name('playlist');
    Route::get('profile', function () {
        return view('profile');
    })->name('profile');
    Route::get('history', 'App\Http\controllers\listeMediaController@getHistory')->name('history');

});

Route::get('favorite', function () {
    return view('favorite');
})->name('favorite');

Route::get('tableau', function () {
    return view('tableau');
})->name('tableau');

Route::get('admins', function () {
    return view('admins');
});


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



Route::group(['middleware' => ['web']], function () {
   
    
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
//Route::get('tableau', 'App\Http\controllers\listeMediaController@getHistory')->name('tableau');
Route::get('homedisc', 'App\Http\controllers\listeMediaController@getListeMedias')->name('homedisc');
Route::get('film/{film}', 'App\Http\controllers\listeMediaController@getFilmById')->name('film');
Route::put('formuUp/film/{id}', 'App\Http\controllers\listeMediaController@updateFilm')->name('updatefilm');
//Route::delete('film/{film}', 'App\Http\controllers\listeMediaController@destroy')->name('films.destroy');

Route::get('auth',function(){
    return view('auth');
});
Route::get('signup',function(){
    return view('register');
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
