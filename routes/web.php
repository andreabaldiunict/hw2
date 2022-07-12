<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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
    return view('register');
});

Route::get('/signup', "App\Http\Controllers\RegisterController@showSignup");
Route::post('/register', "App\Http\Controllers\RegisterController@register");

Route::get('/register/username/{username}', "App\Http\Controllers\RegisterController@controllaUsername");
Route::get('/register/email/{email}', "App\Http\Controllers\RegisterController@controllaEmail");

Route::get('/login', "App\Http\Controllers\LoginController@login")->name("login");
Route::get('/logout', "App\Http\Controllers\LoginController@logout")->name("logout");
Route::post('/login', "App\Http\Controllers\LoginController@checkLogin");

Route::get('/consigliati', "App\Http\Controllers\ConsigliatiController@index");
Route::get('/home', "App\Http\Controllers\HomeController@index");
Route::get('/quotable', "App\Http\Controllers\HomeController@quotable");

Route::get('/store', "App\Http\Controllers\StoreController@index");
Route::get('/store/id/{id}', "App\Http\Controllers\StoreController@ispref");
Route::post('/addPreferiti', "App\Http\Controllers\StoreController@addPref");
Route::get('/store/{book}', "App\Http\Controllers\StoreController@Book");

Route::get('/preferiti', "App\Http\Controllers\PrefController@index");
Route::get('/preferito', "App\Http\Controllers\PrefController@pref");
Route::post('/remove_preferito', "App\Http\Controllers\PrefController@remove_pref");

