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

Route::get('/about','CompaniesController@link')->name('about.link');

Route::get('/companies/create','CompaniesController@create')->name('companies.create');
Route::post('/companies/create','CompaniesController@store')->name('companies.store');
Route::get('/companies','CompaniesController@index')->name('companies.index');
Route::get('/companies/{id}','CompaniesController@show')->name('companies.show');
Route::get('/companies/{id}/edit','CompaniesController@edit')->name('companies.edit');
Route::post('/companies/{id}/edit','CompaniesController@update')->name('companies.update');
Route::post('/companies/{id}/delete','CompaniesController@delete')->name('companies.delete');

Route::get('/setting','CompaniesController@setting')->name('setting');
Route::get('/setting/question','ItemsController@index')->name('question.index');
Route::get('/setting/question/create','ItemsController@create')->name('question.create');
Route::post('/setting/question/create','ItemsController@store')->name('question.store');

Route::get('/question/{id}/edit','ItemsController@edit')->name('question.edit');
Route::post('/question/{id}/edit','ItemsController@update')->name('question.update');
Route::post('/question/{id}/delete','ItemsController@delete')->name('quesiton.delete');

Route::get('/sheets/{id}','SheetsController@show')->name('sheets.show');
Route::get('/companies/{id}/sheets/create','SheetsController@create')->name('sheets.create');
Route::post('/companies/{id}/sheets/create','SheetsController@store')->name('sheets.store');
Route::get('/sheets/{id}/edit','SheetsController@edit')->name('sheets.edit');
Route::post('/sheets/{id}/edit','SheetsController@update')->name('sheets.update');

Route::get('/sheets/{sheets_id}/question/{items_id}/answer/create/','SheetItemController@create')->name('answer.create');
Route::post('/sheets/{sheets_id}/question/{items_id}/answer/create/','SheetItemController@store')->name('answer.store');
Route::get('/answer/{id}/edit','SheetItemController@edit')->name('answer.edit');
Route::post('/answer/{id}/edit','SheetItemController@update')->name('answer.update');

Route::get('/sheets/{id}/memos/create','MemosController@create')->name('memos.create');
Route::post('/sheets/{id}/memos/create','MemosController@store')->name('memos.store');
Route::get('/memos/{id}/edit','MemosController@edit')->name('memos.edit');
Route::post('/memos/{id}/edit','MemosController@update')->name('memos.update');
Route::post('/memos/{id}/delete','MemosController@delete')->name('memos.delete');