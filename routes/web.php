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
//Route::resource('/ticket', 'TicketController');
/*Events*/
Route::resource('/event', 'EventController');
/*Auth*/
Auth::routes();


Route::group(['prefix' => 'posts'], function() {
    Route::get('/', 'PostController@index');
    Route::match(['get', 'post'], 'create', 'PostController@create');
    Route::match(['get', 'put'], 'update/{id}', 'PostController@update');
    Route::get('show/{id}', 'PostController@show');
    Route::delete('delete/{id}', 'PostController@destroy');
});
