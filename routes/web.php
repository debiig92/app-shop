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

Route::get('/', 'TestController@welcome');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/products', 'ProductController@index'); // Listado de productos

Route::get('/admin/products/create', 'ProductController@create'); //ver formulario de creacion de productos

Route::post('/admin/products', 'ProductController@store'); // registrar poducto, almacenar datos

Route::get('/admin/products/{id}/edit', 'ProductController@edit'); //ver formulario de edicion de productos

Route::post('/admin/products/{id}/edit', 'ProductController@update'); // actualizar producto

Route::delete('/admin/products/{id}', 'ProductController@destroy'); // eliminar producto
