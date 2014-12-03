<?php

Route::get('/', 'PagesController@index');
Route::post('/', 'PagesController@store');

Route::get('result', function() {
    return 'result';
});