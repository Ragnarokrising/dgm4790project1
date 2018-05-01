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

// Created by Jeremy Ashby

Route::get('/', function () {
    //returns the home page 
    return view('welcome');
});

Route::get('generic', function () {
    //returns the generic page
    return view('generic');
});

Route::get('elements', function () {
    //returns the elements page
    return view('elements');
});