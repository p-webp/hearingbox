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
Route::get('companies','CompaniesController@index')->name('companies.index');
Route::get('companies/{id}','CompaniesController@show')->name('companies.show');
Route::get('sheets/{id}','SheetsController@show')->name('sheets.show');
Route::get('sheets/{id}/memos/create','MemosController@create')->name('memos.create');
Route::post('sheets/{id}/memos/create','MemosController@store')->name('memos.store');
Route::get('answer/{id}/edit','SheetItemController@edit')->name('answer.edit');
Route::post('answer/{id}/edit','SheetItemController@update')->name('answer.update');
Route::get('memos/{id}/edit','MemosController@edit')->name('memos.edit');
Route::post('memos/{id}/edit','MemosController@update')->name('memos.update');
Route::post('memos/{id}/delete','MemosController@delete')->name('memos.delete');