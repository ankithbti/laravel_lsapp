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

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');

Route::resource('posts', 'PostsController');

// Route::get('/hello', function () {
//     //return view('welcome');
//     return 'Hello World';
// });

// Route::get('/about', function () {
//     return view('pages.about');
// });

// Route::get('/users/{id}/{name}', function ($userId, $userName) {
//     return 'This is User :: id: ' . $userId . ' name: ' . $userName;
// });

Auth::routes();
//Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/dashboard', 'DashboardController@index');
