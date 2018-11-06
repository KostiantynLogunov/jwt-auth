<?php

Route::group(['prefix' => 'auth'], function () {
	Route::post('login', 'API\AuthController@login');
	Route::post('logout', 'API\AuthController@logout');
	Route::post('refresh', 'API\AuthController@refresh');
	Route::post('me', 'API\AuthController@me');
	Route::post('payload', 'API\AuthController@payload');
});
