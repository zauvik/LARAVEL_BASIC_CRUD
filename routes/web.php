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


//-----------read----------//
Route::get('/','BookController@show');

//-----------create----------//
Route::get('/add', function () {
    return view('add');
});
Route::post('/action/add','BookController@add');

//-----------update----------//
Route::get('/update/bookid={bookid}', 'BookController@form_update');
Route::post('/action/update/bookid={bookid}','BookController@update');

//-----------delete----------//
Route::get('/action/delete/bookid={bookid}','BookController@delete');