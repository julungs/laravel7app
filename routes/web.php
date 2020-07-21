<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
/*
    |--------------------------------------------------------------------------
    | Below is my Detailed Routes list for CONTACTS & CUSTOMER (resource)
    |--------------------------------------------------------------------------
    | Route::get('/contacts', 'ContactsController@index');
    | Route::get('/contacts/create', 'ContactsController@create');
    | Route::get('/contacts/{contact}', 'ContactsController@show');
    | Route::get('/contacts/{contact}/edit', 'ContactsController@edit');
    | Route::post('/contacts', 'ContactsController@store');
    | Route::delete('/contacts/{contact}', 'ContactsController@destroy');
    | Route::patch('/contacts/{contact}', 'ContactsController@update');
    |--------------------------------------------------------------------------
    | Route::get('/customers', 'CustomersController@index');
    | Route::get('/customers/create', 'CustomersController@create');
    | Route::get('/customers/{customer}', 'CustomersController@show');
    | Route::get('/customers/{customer}/edit', 'CustomersController@edit');
    | Route::post('/customers', 'CustomersController@store');
    | Route::delete('/customers/{customer}', 'CustomersController@destroy');
    | Route::patch('/customers/{customer}', 'CustomersController@update');
    |--------------------------------------------------------------------------
    | WHILE below is my Undetailed Routes (it is look MORE SIMPLE)
    | because make controller & model in one order on terminal
    | "php artisan make:controller [Names] -r -m [Name]
    |--------------------------------------------------------------------------
*/
Route::resource('contacts', 'ContactsController');
Route::resource('customers', 'CustomersController');
