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

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/about', function() {
	return view('about');
});

Route::get('/contact', function() {
	return view('contact');
});

Route::get('/order', function() {
	return view('order');
});

Route::get('/message', function() {
	return view('message');
});


Route::group(['middleware' => 'App\Http\Middleware\Admin'], function()
{
    Route::get('/admin', function()
    {
        // can only access this if type == A
    });

});

Route::group(['middleware' => 'auth'], function () {

   Route::resource('store/{}', 'StoreController');

   Route::resource('admin/{}', 'AdminController');

});