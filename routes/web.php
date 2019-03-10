<?php

Route::get('/', function () {
    return view('test');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
