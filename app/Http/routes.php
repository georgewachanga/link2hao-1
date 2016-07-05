<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/','PagesController@GetIndex');
Route::get('about','PagesController@GetAbout');

Route::get('contact','PagesController@GetContact');

Route::get('gallery','PagesController@GetGallery');
Route::get('services','PagesController@GetServices');
Route::get('rooms','PagesController@GetRooms');

Route::get('single','PagesController@GetSingle');
Route::get('category','PagesController@GetCategory');
Route::get('news','PagesController@GetNews');
Route::get('carousel','PagesController@GetCarousel');
Route::get('reservation','PagesController@Getreservation');
Route::get('advertise','PagesController@GetAdvertise');
//adminhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh

Route::get('dashboard','PagesController@GetDashboard');
Route::get('blank','PagesController@GetBlank');
Route::get('charts','PagesController@GetCharts');
Route::get('compose','PagesController@GetCompose');
Route::get('forms','PagesController@GetForms');
Route::get('grids','PagesController@GetGrids');
Route::get('inbox','PagesController@GetInbox');
Route::get('media','PagesController@GetMedia');
Route::get('tables','PagesController@GetTables');
Route::get('widgets','PagesController@GetWidgets');
Route::get('codes','PagesController@GetCodes');
Route::get('newuser','PagesController@GetNewuser');


//resourcesffffffffffffffffffffffffffffffffffffffffffffffffffffffffff
Route::resource('owner','ownerController');
Route::auth();

Route::get('/home', 'HomeController@index');
