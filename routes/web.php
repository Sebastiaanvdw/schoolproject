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


Route::group(['prefix' => 'merchandises'], function() {
    Route::get('/', 'MerchandiseController@index');
    Route::match(['get', 'post'], 'create', 'MerchandiseController@create');
    Route::match(['get', 'put'], 'update/{id}', 'MerchandiseController@update');
    Route::get('show/{id}', 'MerchandiseController@show');
    Route::delete('delete/{id}', 'MerchandiseController@destroy');
});

Route::group(['prefix' => 'companies'], function() {
    Route::get('/', 'CompanyController@index');
    Route::match(['get', 'post'], 'create', 'CompanyController@create');
    Route::match(['get', 'put'], 'update/{id}', 'CompanyController@update');
    Route::get('show/{id}', 'CompanyController@show');
    Route::delete('delete/{id}', 'CompanyController@destroy');
});
