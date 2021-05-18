<?php


Route::group(['namespace' => 'MinhHao\Demo\Http\Controllers'], function () {
    Route::get('/demo', 'DemoController@getIndex');
});
