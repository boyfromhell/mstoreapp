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
Auth::routes(['verify' => true]);

Route::get('/', function () {
    return view('welcome');
});



Route::get('/home', 'HomeController@index')->middleware('auth');

// Profile

Route::get('show-profile', 'ProfileController@showProfileToUser')->name('show-profile');
Route::get('determine-profile-route', 'ProfileController@determineProfileRoute')->name('determine-profile-route');
Route::resource('profile', 'ProfileController');

//setting
Route::get('settings', 'SettingsController@settings')->name('settings');
Route::post('settings', 'SettingsController@update')->name('user-update');

//terms of service

Route::get('/terms', 'PagesController@terms');


//Create store geolocations

Route::get('/stores/create', 'StoresController@create');
Route::resource('stores', 'StoresController');

