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

/* Route pour la liste */

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/liste', 'HomeController@show');

/* Route pour les musiques */
Route::get('/ajouterMusique', 'HomeController@ajouterMusique');
Route::post('/nouvelleMusique', 'HomeController@nouvelleMusique');

/* Route pour l'update'*/
Route::post('/maj', 'HomeController@majMusique');
Route::post('/majMusique', 'HomeController@up');

/* Route pour la suppression*/
Route::post('/supprimer','HomeController@supr');

/* Route pour les genres*/
Route::get('/Genre', 'HomeController@Genre');
Route::post('/nouveauGenre', 'HomeController@nouveauGenre');

