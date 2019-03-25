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


Route::get('users', 'UserController@index');
Route::get('users/create', 'UserController@create');
Route::post('users', 'UserController@store');
Route::get('users/{id}/edit', 'UserController@edit');
Route::put('users/{id}', 'UserController@update');
Route::delete('users/{id}', 'UserController@destroy');

Route::get('reservations', 'ReservationController@index');
Route::get('reservations/create', 'ReservationController@create');
Route::post('reservations', 'ReservationController@store');
Route::get('reservations/{id}/edit', 'ReservationController@edit');
Route::put('reservations/{id}', 'ReservationController@update');
Route::delete('reservations/{id}', 'ReservationController@destroy');


Route::get('paiements', 'PaiementController@index');
Route::get('paiements/create', 'PaiementController@create');
Route::post('paiements', 'PaiementController@store');
Route::get('paiements/{id}/edit', 'PaiementController@edit');
Route::put('paiements/{id}', 'PaiementController@update');
Route::delete('paiements/{id}', 'PaiementController@destroy');

Route::get('roles', 'RoleController@index');
Route::get('roles/create', 'RoleController@create');
Route::post('roles', 'RoleController@store');
Route::get('roles/{id}/edit', 'RoleController@edit');
Route::put('roles/{id}', 'RoleController@update');
Route::delete('roles/{id}', 'RoleController@destroy');

Route::get('users', 'UserController@index');
Route::get('users/create', 'UserController@create');
Route::post('users', 'UserController@store');
Route::get('users/{id}/edit', 'UserController@edit');
Route::put('users/{id}', 'UserController@update');
Route::delete('users/{id}', 'UserController@destroy');

Route::get('representations', 'RepresentationController@index');
Route::get('representations/create', 'RepresentationController@create');
Route::post('representations', 'RepresentationController@store');
Route::get('representations/{id}/edit', 'RepresentationController@edit');
Route::put('representations/{id}', 'RepresentationController@update');
Route::delete('representations/{id}', 'RepresentationController@destroy');

Route::get('sieges', 'SiegeController@index');
Route::get('sieges/create', 'SiegeController@create');
Route::post('sieges', 'SiegeController@store');
Route::get('sieges/{id}/edit', 'SiegeController@edit');
Route::put('sieges/{id}', 'SiegeController@update');
Route::delete('sieges/{id}', 'SiegeController@destroy');

Route::get('salles', 'SalleController@index');
Route::get('salles/create', 'SalleController@create');
Route::post('salles', 'SalleController@store');
Route::get('salles/{id}/edit', 'SalleController@edit');
Route::put('salles/{id}', 'SalleController@update');
Route::delete('salles/{id}', 'SalleController@destroy');

Route::get('pieces_theatres', 'Pieces_theatreController@index');
Route::get('pieces_theatres/create', 'Pieces_theatreController@create');
Route::post('pieces_theatres', 'Pieces_theatreController@store');
Route::get('pieces_theatres/{id}/edit', 'Pieces_theatreController@edit');
Route::put('pieces_theatres/{id}', 'Pieces_theatreController@update');
Route::delete('pieces_theatres/{id}', 'Pieces_theatreController@destroy');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
