<?php

Route::get('/', function () {
    return view('layouts.auth');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
