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
Route::get('/main', 'PagesController@main')->name('main');
Route::get('/inventario', 'PagesController@inventario')->name('inventario');
Route::get('/proveedores', 'PagesController@proveedores')->name('proveedores');
Route::resource('articulos', 'ArticuloController');
Route::resource('familias', 'FamiliaController');
Route::resource('marcas', 'MarcaController');
Route::resource('subfamilias', 'SubfamiliaController');
Route::resource('proveedores', 'ProveedorController');
