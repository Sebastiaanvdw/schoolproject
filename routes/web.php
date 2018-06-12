<?php

/*Welcome*/
Route::get('/', function() { return view ('welcome');});
/*Home*/
Route::resource('/home', 'HomeController');
/*Vacancies*/
Route::resource('/vacancies', 'VacanciesController');
/*Advertisements*/
Route::resource('/advertisements', 'AdvertisementsController');
/*Tickets*/
Route::resource('/tickets', 'TicketsController');
/*Second-Hand Tickets*/
Route::resource('/secondhandtickets', 'SecondHandTicketsController');
/*Events*/
Route::resource('/event', 'EventController');
/*Auth*/
Auth::routes();
