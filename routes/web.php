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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/note/create/page', 'noteController@createPage')->name('create.note.page');
Route::post('/note/create', 'noteController@createNote')->name('create.note');
Route::get('/notes/update-page/{id}', 'NoteController@updatePage')->name('update.note.page');
Route::post('notes/update', 'NoteController@update')->name('update.note');
Route::get('/notes/delete-page/{id}', 'NoteController@delete')->name('delete.note');
Route::post('/notes/create', 'NoteController@create')->name('create.note');
