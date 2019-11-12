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

// Users
Route::get('/users', 'Users\UserController@usersIndex')->name('users');
Route::get('users/create', 'Users\UserController@userCreate');
Route::get('users/edit/{id?}', 'Users\UserController@userEdit');
Route::post('/users/update', 'Users\UserController@userUpdate');
Route::post('users/create', 'Users\UserController@createType')->name('createType');

// Subscriptions
Route::get('/subscriptions', 'Users\UserController@subscriptionsIndex')->name('subscriptions');