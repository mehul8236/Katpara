<?php

Route::group(['prefix' => 'admin/dashboard', 'namespace' => 'Components\Dashboard\Controllers'], function()
{
	Route::get('/', ['as' => 'dashboard', 'uses' => 'DashboardController@index']);
});