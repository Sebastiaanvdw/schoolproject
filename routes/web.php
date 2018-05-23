<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/vacancies', 'VacanciesController@index');

Route::get('/vacancies/create', 'VacanciesController@create');

Route::post('/vacancies/store', 'VacanciesController@store');

Route::get('/vacancies/{vacancy}', 'VacanciesController@show');

Route::delete('/vacancies/delete/{vacancy}', 'VacanciesController@delete');

Route::get('/vacancies/update/{vacancy}', 'VacanciesController@update');

Route::patch('/vacancies/edit/{vacancy}', 'VacanciesController@edit');