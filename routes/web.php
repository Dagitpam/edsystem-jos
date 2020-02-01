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

 Auth::routes();

 Route::get('/home', 'SicknessesController@index')->name('home');
// Route::get('/index','SicknessesController@index');
Route::get('/','SicknessesController@loginPage');
Route::get('/register','SicknessesController@registerPage');
Route::resource('/home1','SicknessesController');
Route::get('home1','SicknessesController@show');
Route::resource('/admin','AdminController');
Route::resource('/tips','TipsController');
Route::resource('/comment','CommentsController');
Route::get('/view','CommentsController@showAdmin');
Route::get('/contact','SicknessesController@contactus');
Route::get('/about','SicknessesController@aboutus');
// Route::resource('/viewComment','TipsController');

Route::get('/view-sickness','SicknessesController@show');
