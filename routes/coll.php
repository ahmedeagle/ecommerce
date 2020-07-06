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

Route::get('collection','CollectTut@index');

Route::get('maincats','CollectTut@complex');

Route::get('main-cats','CollectTut@complexFilter');


Route::get('main-cats3','CollectTut@complextransform');




