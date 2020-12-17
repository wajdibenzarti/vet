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

Route::get('/animals','AnimalController@index')->name('animals');
Route::get('/animal/ajout','AnimalController@create')->name('create_pet');
Route::get('/animal/list','AnimalController@list')->name('list_pet');
Route::get('/animal/delete/{id}','AnimalController@delete')->name('delete_pet');
Route::post('/animal/ajout','AnimalController@store')->name('add_pet');
Route::get('/consultations','ConsultationController@index')->name('consultations');
Route::get('/consultation/ajout','ConsultationController@create')->name('create_rdv');
Route::get('/consultation/list','ConsultationController@list')->name('list_rdv');
Route::get('/consultation/delete/{id}','ConsultationController@destroy')->name('delete_rdv');
Route::post('/consultation/ajout','ConsultationController@store')->name('add_rdv');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
