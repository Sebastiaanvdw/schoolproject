<?php

/*Welcome*/
Route::get('/', function() { return view ('welcome');});
/*Home*/
Route::resource('/home', 'HomeController');

Route::get('/company', "CompanyController@index");
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
