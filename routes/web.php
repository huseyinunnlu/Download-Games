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
Route::post('/multipleDelete', 'App\Http\Controllers\crudController@multipleDelete');
/*Category-Language-Platform*/
Route::get('/adminpanel/cat-lang-plat', 'App\Http\Controllers\adminController@clp');
Route::get('/adminpanel/cat-lang-plat/addclp', 'App\Http\Controllers\adminController@addclp');
Route::get('/adminpanel/cat-lang-plat/updateclp/{id}', 'App\Http\Controllers\adminController@updateclp');
Route::post('/addclp', 'App\Http\Controllers\crudController@insertData');
Route::post('/updateclp/{id}', 'App\Http\Controllers\crudController@updateData');
/*Posts*/
Route::get('/adminpanel/posts', 'App\Http\Controllers\adminController@posts');
Route::get('/adminpanel/posts/addpost', 'App\Http\Controllers\adminController@addpost');
Route::get('/adminpanel/posts/updatepost/{id}', 'App\Http\Controllers\adminController@updatepost');
Route::post('/addpost', 'App\Http\Controllers\crudController@insertData');
Route::post('/updatepost/{id}', 'App\Http\Controllers\crudController@updateData');

