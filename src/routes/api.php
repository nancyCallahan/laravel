<?php

Route::group(['middleware' => 'auth'], function () {
    Route::resource('users', 'Api\UsersController');
});