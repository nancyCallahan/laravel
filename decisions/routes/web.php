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

Route::get('/', function () {
    return view('welcome');
});

//Auth Routes
Route::get('/register','AuthController@showRegister');
Route::get('/login','AuthController@showLogin');//ruta seguit del controlador +@ la funcio
Route::post('/register','AuthController@postLogin');
Route::post('/login','AuthController@showLogin');//ruta seguit del controlador +@ la funcio

//index route
Route::get('/index','HomeController@showLogin');//ruta seguit del controlador +@ la funcio