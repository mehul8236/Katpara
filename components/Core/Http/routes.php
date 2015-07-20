<?php

Route::group(['namespace' => 'Components\Core\Controllers'], function()
{
	Route::get('/', [ 'as' => 'home', 'uses' => 'HomeController@index']);
});