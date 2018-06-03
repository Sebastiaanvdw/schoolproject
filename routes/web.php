<?php

Route::resource('/vacancies', 'VacanciesController');
Route::resource('/advertisements', 'AdvertisementsController');

/*Laravel resources en Laravel collective*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
