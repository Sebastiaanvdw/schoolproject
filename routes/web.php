<?php

Route::resource('/vacancies', 'VacanciesController');

/*Laravel resources en Laravel collective*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
