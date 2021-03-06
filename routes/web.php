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





	//authentication routes
	Route::get('auth/login','Auth\LoginController@showLoginForm');
	Route::post('auth/login','Auth\LoginController@login');
	Route::get('auth/logout','Auth\LoginController@logout');
	Route::post('login','Auth\LoginController@login');


	//register users
	Route::get('auth/register','Auth\RegisterController@showRegistrationForm');
	Route::post('auth/register','Auth\RegisterController@register');


	Route::get('blog/{slug}', ['as' => 'blog.single', 'uses' => 'BlogController@getSingle'])->where('slug', '[\w\d\-\_]+');
	Route::get('blog', ['uses' => 'BlogController@getIndex', 'as' => 'blog.index']);
	Route::get('/', 'PageController@getIndex');
	Route::get('/about', 'PageController@getAbout');
	Route::get('/contact', 'PageController@getContact');
	Route::resource('posts','PostController');


