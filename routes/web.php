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
Route::get('/coming-soon', 'PagesController@soon');
/* ------------- End Pages */

Route::get('/home', 'HomeController@index')->name('home');





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
    Route::get('/gallery/create', 'PhotobooksController@create');
    Route::get('/gallery/{slug}/edit', 'PhotobooksController@edit');
    Route::post('/gallery', 'PhotobooksController@store');
    Route::post('/gallery/{slug}/update', 'PhotobooksController@update');
    Route::get('gallery/{slug}/delete', 'PhotobooksController@destroy');
    Route::post('/pics', 'PicsController@store');
    Route::get('/blogs/{slug}/edit', 'BlogsController@edit');
    Route::get('/blogs/create', 'BlogsController@create');
    Route::post('/blogs', 'BlogsController@store');
    Route::post('/blogs/{slug}/update', 'BlogsController@update');
    Route::get('/blogs/{slug}/delete', 'BlogsController@destroy');
    Route::get('/events/create', 'EventsController@create');
    Route::post('/events/create', 'EventsController@store');
    Route::get('/events/{slug}/edit','EventsController@edit');
    Route::post('events/{slug}/update', 'EventsController@update');
    Route::get('/events/{slug}/delete', 'EventsController@destroy');
});

/* Gallery */
Route::get('/galleries', 'PhotobooksController@index');
Route::get('/gallery/{title}','PhotobooksController@show');

/* -------------- Blogs */
Route::get('/blogs', 'BlogsController@index');
Route::get('/blogs/{slug}', 'BlogsController@show' );

/* -------------- Events */
Route::get('/events', 'EventsController@index');
Route::post('/events', 'EventsController@location');


Route::get('/events/{slug}', 'EventsController@show');



