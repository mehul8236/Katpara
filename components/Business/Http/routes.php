<?php

Route::group(['prefix' => 'business', 'namespace' => 'Components\Business\Http\Controllers'], function()
{
	Route::get('/', 'BusinessController@index');
});