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

                 // -------------- Favorites -------------------
    Route::get('favorites','App\Http\controllers\listeMediaController@getListeFavorites')->name('favorites');
    Route::get('addfav/{film}', 'App\Http\controllers\listeMediaController@addFav')->name('addfav');
    Route::get('delfav/{film}', 'App\Http\controllers\listeMediaController@delFav')->name('delfav');

                // -------------- Comments -------------------
    Route::get('addcomment/{contenu}/{film}', 'App\Http\controllers\listeMediaController@addComment')->name('addcomment');
    Route::get('delcomment/{film}', 'App\Http\controllers\listeMediaController@delComment')->name('delcomment');

                // -------------- History -------------------
    Route::get('addhistory/{film}', 'App\Http\controllers\listeMediaController@addHistory')->name('addhistory');
    Route::get('delhistory/{film}', 'App\Http\controllers\listeMediaController@delHistory')->name('delhistory');
    Route::get('history', 'App\Http\controllers\listeMediaController@getHistory')->name('history');

                // -------------- Playlist -------------------
    Route::get('playlist','App\Http\controllers\listeMediaController@getListePLaylist')->name('playlist');
    Route::get('addtoplaylist/{playlist}/{film}', 'App\Http\controllers\listeMediaController@addToPlaylist')->name('addtoplaylist');
    Route::get('addplaylist/{name}/{film}', 'App\Http\controllers\listeMediaController@addPlaylist')->name('addplaylist');
    Route::get('mediaplaylist/{playlist}', 'App\Http\controllers\listeMediaController@getPlaylistMedia')->name('mediaplaylist');
    Route::get('delplaylist/{playlist}', 'App\Http\controllers\listeMediaController@delPlaylist')->name('delplaylist');
    Route::get('delfromplaylist/{playlist}/{film}', 'App\Http\controllers\listeMediaController@delFromPlaylist')->name('delfromplaylist');
    Route::get('playlistdetails', 'App\Http\controllers\listeMediaController@getPlaylistDetails')->name('playlistdetails');

                // -------------- User -------------------
    Route::post('updateuser', 'App\Http\controllers\listeMediaController@updateUser')->name('updateuser');
    Route::get('updateimage/{imageurl}', 'App\Http\controllers\listeMediaController@updateImage')->name('updateimage');

                // -------------- Connected Home -------------------
    Route::get('homeco', 'App\Http\controllers\listeMediaController@getListeMediasCo')->name('homeco');

                // -------------- Details media -------------------
    Route::get('details/{id}', 'App\Http\controllers\listeMediaController@getDetails')->name('details');

                // -------------- Profile page -------------------
    Route::get('profile', 'App\Http\controllers\listeMediaController@getUserInfos')->name('profile');

                // -------------- Filter Medias -------------------
    Route::get('medias', 'App\Http\controllers\listeMediaController@Search')->name('medias');

});

//----------------------- Home page disconnected ----------------
    Route::get('homedeco', function () {
        return view('homedeco');
    })->name('homedeco');

// ---------------- Sign Up page ------------------------------------
    Route::get('signup',function(){
        return view('register');
    });

//  -------------------- Laravel -----------------
    Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::group(['middleware' => ['web']], function () {
    });