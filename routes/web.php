<?php

/*Welcome*/
Route::get('/', function() { return view ('welcome');});

/*Home*/
Route::resource('/home', 'HomeController');

/*Admin*/
Route::resource('/admin', 'AdminsController');
Route::get('/admin', 'AdminsController@index')->name('admin.dashboard');
Route::get('/admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/admin/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');

/*Vacancies*/
Route::resource('/vacancies', 'VacanciesController');

/*Advertisements*/
Route::resource('/advertisements', 'AdvertisementsController');

/*Tickets*/
//Route::resource('/ticket', 'TicketController');

/*Events*/
Route::resource('/event', 'EventController');

/*Auth*/
Auth::routes();
