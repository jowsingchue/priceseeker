<?php

Route::get('/', 'PagesController@index');
Route::post('result', 'PagesController@store');

Route::get('result', function() {
    return 'result';
});