<?php

Route::group(['prefix' => 'customer', 'namespace' => 'Components\Customer\Controllers'], function()
{
	// Route::get('/', 'CustomerController@index');
});

Route::group(['prefix' => 'auth', 'namespace' => 'Components\Customer\Controllers'], function()
{
	Route::post('login', [ 'as' => 'login', 'uses' => 'AuthController@index' ]);
	
	Route::get('login', function() {
		return Redirect::to('/');
	});

	Route::get('logout', [ 'as' => 'logout', 'uses' => 'AuthController@logout' ]);
	Route::get('forgotton', [ 'as' => 'forgotton', 'uses' => 'AuthController@index' ]);
});