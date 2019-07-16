<?php

// Route::get('/', function () {
//     return view('index');
// });

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/categories-periods', 'CategoryPeriodController@index')->name('categories-periods.index');

Route::resource('/companies','CompanyController');
Route::get('categories/delete/{id}','CategoryController@delete')->name('categories.delete');
Route::resource('/categories','CategoryController');
Route::get('/periods/delete/{id}','PeriodController@delete')->name('periods.delete');
Route::resource('/periods','PeriodController');
Route::get('/companies/activate/{company}','CompanyController@activate')->name('companies.activate');
