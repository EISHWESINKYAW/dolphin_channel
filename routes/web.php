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
    //return view('welcome');
    //return view('layouts/admin');
});
//backend
Route::get('dashboard','BackendController@dashboardfun')->name('dashboardpage');


Route::resource('movies','MovieController');

Route::resource('actors','ActorController');

Route::resource('directors','DirectorController');

Route::resource('genre','GenreController');




//frontend
Route::get('/','PageController@indexfun')->name('homepage');
Route::get('detail','PageController@detailfun')->name('detailpage');
Route::get('landing','PageController@landingfun')->name('landingpage');
Route::get('comming','PageController@commingfun')->name('commingpage');

Route::get('/testing',function ($value='')
{
	return 'This is a testing page';
});

