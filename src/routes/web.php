<?php

use Illuminate\Http\Request;

Route::group(['namespace'=>'TechnoStupid\CurrencyConverter\Http\Controllers'],function(){

    Route::get('convert','CurrencyConverterController@convert')->name('convert');
});

