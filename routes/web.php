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


route::get('sendSms//','HomeController@sendSms');

Route::get('/', function () {
    return view('front.home');
});

Auth::routes();

//Route::get('/home', 'HomeCo
//Route::get('/send-mails', 'HomeController@sendMails');



######################tasks#############


Route::get('offers','Homecontroller@createOffer');
Route::post('offers','Homecontroller@saveOffer')->name('save.users');


Route::get('video','Homecontroller@getVideo');
Route::post('video','Homecontroller@upload')->name('upload.video');




