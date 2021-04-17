<?php

Route::get('/booking', 'BookingController@index')->name('booking.index');
Route::post('/booking', 'BookingController@store')->name('booking.store');
