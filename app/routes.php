<?php

Route::get('/', 'PagesController@index');
Route::post('result', 'PagesController@store');

Route::get('test', function() {
    return 'test';
});