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
Route::get('/auth', function () {
    return view('auth');
})->name('auth');
/*Route::get('/homeco', function () {
    return view('homeco');
})->name('homeco');*/
Route::get('/homedisc', function () {
    return view('homedisc');
})->name('homedisc');
Route::get('/profile', function () {
    return view('profile');
})->name('profile');
Route::get('/history', function () {
    return view('historique');
})->name('history');
Route::get('/admins', function () {
    return view('admins');
});
Route::get('homeco', 'App\Http\controllers\listeMediaController@getListeMedias')->name('homeco');

