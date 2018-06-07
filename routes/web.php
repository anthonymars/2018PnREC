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



Auth::routes();

/* ------------- Pages */
Route::get('/', 'PagesController@index');
Route::get('/cato', 'PagesController@cato');
Route::get('/kanawha-city', 'PagesController@kanawha');
Route::get('/mlk-jr', 'PagesController@mlk');
Route::get('/north-charleston', 'PagesController@northCharleston');
Route::get('/roosevelt', 'PagesController@roosevelt');
Route::get('/get-in-touch', 'PagesController@contact');
/* ------------- End Pages */

Route::get('/home', 'HomeController@index')->name('home');

/* Gallery */
Route::get('/galleries', 'PhotobooksController@index');
Route::get('/gallery/{title}','PhotobooksController@show');



/* ------------- Admin Pages */

Route::group(['middleware' => 'superfly'], function() {
    Route::get('/admin/roles', 'RolesController@index');
    Route::get('/admin/users', 'AdminsController@userIndex');
    Route::post('/admin/roles', 'RolesController@store');
    Route::get('/admin/roles/create', 'RolesController@create');
    Route::get('/admin/users/{id}/edit', 'AdminsController@userEdit');
    Route::post('/admin/users/{id}/update', 'AdminsController@userUpdate');
});

Route::group(['middleware' => 'youngfly'], function() {
    Route::get('/admin/gallery/create', 'PhotobooksController@create');
    Route::post('/admin/gallery', 'PhotobooksController@store');
    Route::post('/admin/pics', 'PicsController@store');
    Route::get('/blogs/{slug}/edit', 'BlogsController@edit');
    Route::get('/blogs/create', 'BlogsController@create');
    Route::post('/blogs', 'BlogsController@store');
    Route::post('/blogs/{slug}/update', 'BlogsController@update');
    Route::get('/blogs/{slug}/delete', 'BlogsController@destroy');
});


/* -------------- Blogs */
Route::get('/blogs', 'BlogsController@index');
Route::get('/blogs/{slug}', 'BlogsController@show' );
