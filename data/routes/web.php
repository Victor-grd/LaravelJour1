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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/liste', 'HomeController@show');

Route::get('/ajouterMusique', 'HomeController@ajouterMusique');
Route::post('/nouvelleMusique', 'HomeController@nouvelleMusique');

Route::post('/maj', 'HomeController@majMusique');
Route::post('/majMusique', 'HomeController@up');

Route::post('/supprimer','HomeController@supr');


