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

/*Keep routes not in use here
Route::get('/users/{id}', function ($id) {
    return 'This is user'.' '.$id;
});





*/

Route::get('/', 'PagesController@index');

Route::get('/about', 'PagesController@about');

Route::get('/services', 'PagesController@services');

Route::get('/login', 'PagesController@login');

Route::get('/register', 'PagesController@register');

Route::get('/pages', 'PagesController@pages')->name('pages.index');

Route::get('/create', 'PagesController@create');

Route::get('/delete', 'PagesController@delete');

Route::get('/edit', 'PagesController@edit'); 



//Route::get('/pages/{page_id}', 'PageController@show')->name('pages.show');

//Route::get('/pages/{page_id}', 'PageController@show')->name('pages.show');

Route::resource('posts','PostsController');