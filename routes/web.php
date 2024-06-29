<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\HomeController@index');



Route::prefix('transaction')->namespace('App\Http\Controllers\ISO8583\Transactions')->group(function(){

    Route::get('purchase', 'PurchaseBuilderController@index');

});
