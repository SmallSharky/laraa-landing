<?php
Route::resource('umbrello', 'UmbrelloController');
Route::any('/','UmbrelloController@index');
