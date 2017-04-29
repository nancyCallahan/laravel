<?php

Route::post('register', ['uses' => 'Auth\RegisterController@register']);
Route::post('login', ['uses' => 'Auth\LoginController@login']);
Route::get('logout', ['uses' => 'Auth\LoginController@logout']);
