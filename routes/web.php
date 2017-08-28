<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', 'FrontController@index');
Route::get('/show/{id}','FrontController@show');


Route::get('/auth/register', 'Auth\RegisterController@create');
Route::post('/auth/register', 'Auth\AuthController@postRegister');
Route::any('/settings', 'PermissionController@showTestPage');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/auth/getUserInfo', 'AJAX_GetUserInfo@JSON');
Route::group(['prefix' => 'settings'], function () {
    Route::group(['prefix' => 'roles'], function () {
        Route::any('/', 'PermissionController@index')->name('index');
        //Route::any('/make', 'PermissionController@make')->name('make');
        Route::any('/edit/{id}', 'PermissionController@edit')->name('Edit');
        Route::any('/assign', 'PermissionController@assign');
    });
    Route::any('/', function(){
        return redirect('/settings/articles');
    });
    Route::resource('articles','ArticlesController');
    Route::resource('pages','PagesController');
    Route::resource('categories','CategoriesController');
});
Route::group(
    ['prefix' => 'json'],
    function () {
        Route::group(
            ['prefix' => 'update'],
            function () {
                Route::any('/role/{id}', 'PermissionController@update');
            });
        Route::group(
            ['prefix' => 'create'],
            function () {
                Route::any('/role', 'PermissionController@create');
            });
    }
);
