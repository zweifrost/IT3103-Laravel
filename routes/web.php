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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/home', 'PagesController@index');

Route::get('/profile', 'PagesController@profile');

Route::get('/dashboard', 'PagesController@dashboard');

//Route::get('/register', 'PagesController@register');

Route::get('/header', 'PagesController@header');

// Route::get('/profile', function () {
//     return view('profile');
// });

// Route::get('/profile/{id}/{name}', function ($id, $name) {
//     return 'User number '.$id.' Name: '.$name;
// });
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
