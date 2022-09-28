<?php

use Phplite\Route\Route;


Route::get('/', 'HomeController@index');


Route::prefix('admin-panel', function () {
    Route::middleware('admin|owner', function () {
        Route::get('home', 'HomeController@index');
        Route::get('users', 'UsersController@index');
        Route::get('products', 'ProductsController@index');
    });

    //     //nested prefix
    //     // Route::prefix('owner', function () {
    //     //     Route::get('home', 'HomeController@index');
    //     //     Route::get('users', 'UsersController@index');
    //     //     Route::get('products', 'ProductsController@index');
    //     // });
});