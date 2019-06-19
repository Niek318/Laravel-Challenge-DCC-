<?php

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
use Illuminate\Support\Facades\Input;
use App\Activity;


Route::get('/movies', function() {
  return view('movie');
});

Route::get('/', function () {
    return view('welcome');
})->middleware('auth');

Route::get('/backlog', function () {
    return view('backlog');
})->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
