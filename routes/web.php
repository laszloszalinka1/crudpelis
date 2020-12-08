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
Route::resource('movie', 'MovieController');
Route::get('movie/destroy/{id}',['as' => 'movie/destroy', 'uses' => 'MovieController@destroy']);
//movie
Route::post('movie/show', ['as' => 'movie/show', 'uses' => 'MovieController@show']);
Route::post('movie/update/{id}',['as'=> 'movie/update', 'uses' => 'MovieController@update']);
//Roles
Route::resource('role', 'RoleController');
Route::get('role/destroy/{id}',['as' => 'role/destroy', 'uses' => 'MovieController@destroy']);
Route::post('role/show', ['as' => 'role/show', 'uses' => 'MovieController@show']);
Route::post('role/update/{id}',['as'=> 'role/update', 'uses' => 'MovieController@update']);
//statuses
Route::resource('statuses', 'StatusesController');
Route::get('statuses/destroy/{id}',['as' => 'statuses/destroy', 'uses' => 'StatusesController@destroy']);
Route::post('statuses/show', ['as' => 'statuses/show', 'uses' => 'StatusesController@show']);
Route::post('statuses/update/{id}',['as'=> 'statuses/update', 'uses' => 'StatusesController@update']);
//rentals
Route::resource('rental', 'RentalsController');
Route::get('rental/destroy/{id}',['as' => 'rental/destroy', 'uses' => 'RentalsController@destroy']);
Route::post('rental/show', ['as' => 'rental/show', 'uses' => 'RentalsControllerController@show']);
Route::post('rental/update/{id}',['as'=> 'rental/update', 'uses' => 'RentalsController@update']);
//categorias
Route::resource('categorie', 'CategorieController');
Route::get('categorie/destroy/{id}',['as' => 'categorie/destroy', 'uses' => 'CategorieController@destroy']);
Route::post('categorie/show', ['as' => 'categorie/show', 'uses' => 'CategorieController@show']);
Route::post('categorie/update/{id}',['as'=> 'categorie/update', 'uses' => 'CategorieController@update']);
//users
Route::resource('user', 'UserController');
Route::get('user/destroy/{id}',['as' => 'user/destroy', 'uses' => 'UserController@destroy']);
Route::post('user/show', ['as' => 'user/show', 'uses' => 'UserController@show']);
Route::post('user/update/{id}',['as'=> 'user/update', 'uses' => 'UserController@update']);
//type_statuses
Route::resource('type_status', 'Type_statusController');
Route::get('type_status/destroy/{id}',['as' => 'user/destroy', 'uses' => 'Type_statusController@destroy']);
Route::post('Type_status/show', ['as' => 'type_status/show', 'uses' => 'type_statusController@show']);
Route::post('Type_status/update/{id}',['as'=> 'type_status/update', 'uses' => 'Type_statusController@update']);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
