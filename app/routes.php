<?php

Route::get('/', 'PagesController@index');
Route::post('result', 'PagesController@store');