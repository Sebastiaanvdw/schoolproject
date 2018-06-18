<?php

/*Welcome*/
Route::get('/', function() { return view ('welcome');});

/*Home*/
Route::resource('/home', 'HomeController');

/*Admin*/
Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('logout/', 'Auth\AdminLoginController@logout')->name('admin.logout');
    Route::get('/', 'AdminsController@index')->name('admin.index');
//    Route::get('/', 'AdminsController@show')->name('admin.show');
});

Route::resource('/admin', 'AdminsController');
Route::model('admin', \App\User::class);
/*Vacancies*/
Route::post('/vacancies/search', 'VacanciesController@postSearch')->name('vacancies.search');
Route::resource('/vacancies', 'VacanciesController');


/*Advertisements*/
Route::resource('/advertisements', 'AdvertisementsController');

/*Tickets*/
Route::resource('/tickets', 'TicketsController');
/*Second-Hand Tickets*/
Route::resource('/secondhandtickets', 'SecondHandTicketsController');
/*Events*/
Route::resource('/event', 'EventController');
Route::get('/event/create', 'EventController@create')->middleware('role:verified-company');

/*Auth*/
Auth::routes();


Route::group(['prefix' => 'posts'], function() {
    Route::get('/', 'PostController@index');
    Route::match(['get', 'post'], 'create', 'PostController@create');
    Route::match(['get', 'put'], 'update/{id}', 'PostController@update');
    Route::get('show/{id}', 'PostController@show');
    Route::delete('delete/{id}', 'PostController@destroy');
});
