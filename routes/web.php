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

// Type Users
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

// States User
Route::get('/states', 'States\statesController@statesIndex')->name('states');
Route::get('/states/users/create', 'States\statesController@createStateUserIndex');
Route::post('/states/users/create', 'States\statesController@createStateUser');
Route::get('/states/users/edit/{id?}', 'States\statesController@editStateUserIndex');
Route::post('/states/users/edit', 'States\statesController@editStateUser');
Route::get('/states/users/delete/{id?}', 'States\statesController@deleteStateUser');

// States Pet
Route::get('/states/pets/create', 'States\statesController@statesPetCreateIndex');
Route::post('/states/pets/create', 'States\statesController@statesPetCreate');
Route::get('/states/pets/edit/{id?}', 'States\statesController@statesPetEditIndex');
Route::post('/states/pets/edit', 'States\statesController@statesPetEdit');
Route::get('/states/pets/delete/{id?}', 'States\statesController@statesPetDelete');

// States Dates
Route::get('/states/dates/create', 'States\statesController@statesDateCreateIndex');
Route::post('/states/dates/create', 'States\statesController@statesDateCreate');
Route::get('/states/dates/edit/{id?}', 'States\statesController@statesDateEditIndex');
Route::post('/States/dates/edit', 'States\statesController@statesDateEdit');
Route::get('/states/dates/delete/{id?}', 'States\statesController@statesDateDelete');

// --------- Pets
// Types pet
Route::get('/pets', 'Pets\petsController@petsIndex');
Route::get('/pets/type/create', 'Pets\petsController@createTypeIndex');
Route::post('/pets/type/create', 'Pets\petsController@createType');
Route::get('/pets/type/edit/{id?}', 'Pets\petsController@editTypeIndex');
Route::post('pets/type/edit', 'Pets\petsController@editType');
Route::get('pets/type/delete/{id?}', 'Pets\petsController@deleteType');
// Genders Pet
Route::get('/pets/genders/create', 'Pets\petsController@createGenderIndex');
Route::post('/pets/gender/create', 'Pets\petsController@createGender');
Route::get('/pets/gender/edit/{id?}', 'Pets\petsController@editGenderIndex');
Route::post('/pets/gender/edit', 'Pets\petsController@editGender');
Route::get('pets/gender/delete/{id?}', 'Pets\petsController@deleteGender');
// Races Pet
Route::get('/pets/races/create', 'Pets\petsController@createRacesIndex');
Route::post('/pets/races/create', 'Pets\petsController@createRaces');
Route::get('/pets/races/edit/{id?}', 'Pets\petsController@editRacesIndex');
Route::post('/pets/races/edit', 'Pets\petsController@editRaces');
Route::get('/pets/races/delete/{id?}', 'Pets\petsController@deleteRace');

// ------ Medicaments
Route::get('/medicaments', 'Medicaments\medicamentsController@medicamentsIndex');
Route::get('/medicaments/create', 'Medicaments\medicamentsController@medicamentCreateIndex');
Route::post('/medicaments/create', 'Medicaments\medicamentsController@medicamentCreate');
Route::get('/medicaments/edit/{id?}', 'Medicaments\medicamentsController@medicamentEditIndex');
Route::post('/medicaments/edit', 'Medicaments\medicamentsController@medicamentEdit');