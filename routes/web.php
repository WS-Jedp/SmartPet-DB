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
Route::get('users/type/create', 'Users\UserController@userCreate');
Route::get('users/type/edit/{id?}', 'Users\UserController@userEdit');
Route::post('/users/type/update', 'Users\UserController@userUpdate');
Route::post('users/type/create', 'Users\UserController@createType')->name('createType');
Route::get('users/type/delete/{id}', 'Users\UserController@deleteType');

// Subscriptions
Route::get('/subscriptions', 'Users\UserController@subscriptionsIndex')->name('subscriptions');
Route::get('/subscriptions/create', 'Users\UserController@subscriptionCreateIndex');
Route::post('/subscriptions/create', 'Users\UserController@subscriptionCreate');
Route::get('/subscriptions/edit/{id?}', 'Users\UserController@subscriptionEdit');
Route::post('/subscriptions/edit', 'Users\UserController@subscriptionDelete');
Route::get('/users/subscription/delete/{id?}', 'Users\UserController@deleteSubscription');