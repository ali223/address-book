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
