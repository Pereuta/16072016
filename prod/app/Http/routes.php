<?php

Route::get('/','IndexController@index')->name('home');
Route::get('/product/{product}','IndexController@show')->name('product');
Route::group(['prefix'=>'admin/product'],function(){
    Route::get('/','AdminController@index')->name('admin');
    Route::get('/create','AdminController@create')->name('create');
    Route::post('/','AdminController@store')->name('store');
    Route::delete('/{product}','AdminController@destroy')->name('destroy');
});
