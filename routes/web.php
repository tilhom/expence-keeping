<?php

// Route::get('/', function () {
//     return view('index');
// });

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/categories-periods', 'CategoryPeriodController@index')->name('categories-periods.index');

Route::resource('/companies','CompanyController');
Route::resource('/categories','CategoryController');
Route::resource('/periods','PeriodController');
Route::get('/companies/activate/{company}','CompanyController@activate')->name('companies.activate');
