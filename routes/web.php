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
    return view('index');
});
Route::get('/dashboard', function(){
    return view ('dashboard.index');
})->middleware('auth');

Route::get('/register', function(){
    return view('pages.signup');})->name('register');

Route::post('/register', 'UsersController@signup')->name('users.register');

Route::get('/login', function(){
    return view('pages.login');
})->name('login');
Route::post('/login', 'UsersController@signin')->name('users.login');

Route::get('/logout', 'UsersController@logout')->name('logout');