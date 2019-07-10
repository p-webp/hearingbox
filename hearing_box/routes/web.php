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
Route::get('companies','CompaniesController@index')->name('companies');
Route::get('companies/{id}','CompaniesController@show')->name('companies.id');
Route::get('sheets/{id}','SheetsController@show')->name('sheets.id');
