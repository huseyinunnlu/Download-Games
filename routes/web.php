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
/*Front View*/
Route::get('/', 'App\Http\Controllers\frontController@index');


/*Admin View*/
Route::get('/adminpanel', 'App\Http\Controllers\adminController@index');
/*Settings*/
Route::get('/adminpanel/settings', 'App\Http\Controllers\adminController@settings');
Route::post('/addsettings', 'App\Http\Controllers\crudController@insertData');
Route::post('/updatesettings', 'App\Http\Controllers\crudController@updateData');
