<?php

Route::resource('/booking', 'BookingController');

//Admin
Route::group(['prefix' =>'admin', 'middleware' => ['auth', 'admin']], function(){
	Route::resource('/booking', 'BookingController');
});
