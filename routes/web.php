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

Route::get('/', "ClothController@index")->name('all-products');
Route::get('/clothes/create', "ClothController@create")->name('create-product');
// possiamo tenere lo stesso url perchè non sarà vista dall utente, ci serve solo per recuparare i dati
Route::post('/clothes/create', "ClothController@store")->name('store-product');
