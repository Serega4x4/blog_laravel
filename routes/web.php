<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'App\Http\Controllers\Main'], function () {
    Route::get('/', 'IndexController')->name('index');
});

Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin'], function(){
    Route::group(['namespace' => 'Main'], function () {
        Route::get('/', 'IndexController')->name('index');
    });
});

Auth::routes();
