<?php

/**
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'
 */
Route::get('/', 'FrontendController@index')->name('index');
Route::get('macros', 'FrontendController@macros')->name('macros');

Route::post('subscribe', 'FrontendController@subscribe')->name('subscribe');
Route::post('contact', 'FrontendController@contact')->name('contact');


Route::get('/water', 'PagesController@water')->name('water');
Route::get('/gas', 'PagesController@gas')->name('gas');
Route::get('/electricity', 'PagesController@electricity')->name('electricity');
Route::get('/utility-management-plan', 'PagesController@ump')->name('ump');
Route::get('/contact', 'PagesController@contact')->name('contact');
Route::get('/about', 'PagesController@about')->name('about');


Route::group(['namespace' => 'Promotions', 'as' => 'promos.'], function() {
    /* Rollover promotion of companies who are paying too much from inactivity */
    Route::get('rollover', 'PromotionsController@rollover')->name('rollover');
    Route::post('rollover', 'PromotionsController@rolloverSubmit')->name('rollover.submit');
});

/**
 * These frontend controllers require the user to be logged in
 * All route names are prefixed with 'frontend.'
 */
Route::group(['middleware' => 'auth'], function () {
	Route::group(['namespace' => 'User', 'as' => 'user.'], function() {
		/**
		 * User Dashboard Specific
		 */
		Route::get('dashboard', 'DashboardController@index')->name('dashboard');

		/**
		 * User Account Specific
		 */
		Route::get('account', 'AccountController@index')->name('account');

		/**
		 * User Profile Specific
		 */
		Route::patch('profile/update', 'ProfileController@update')->name('profile.update');
	});
});
