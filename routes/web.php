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

Route::get('/', 'ContactsController@index')->name('home');

Route::get('/contacts', 'ContactsController@index')->name('contacts.index');

Route::post('/contacts', 'ContactsController@store')->name('contacts.store');

Route::delete('/contacts/{contact}', 'ContactsController@destroy')->name('contacts.destroy');

Route::get('/contacts/{contact}', 'ContactsController@edit')->name('contacts.edit');

Route::patch('/contacts/{contact}', 'ContactsController@update')->name('contacts.update');

Route::get('/sessions', 'SessionsController@create')->name('sessions.create');

Route::post('/sessions', 'SessionsController@store')->name('sessions.store');

Route::get('/sessions/logout', 'SessionsController@logout')->name('sessions.logout');
