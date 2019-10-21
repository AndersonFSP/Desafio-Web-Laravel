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

use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('register', 'HomeController@formAddUser')->name('formAddUser');
Route::get('users', 'HomeController@list')->name('usersAll');
Route::get('edit/{user}', 'HomeController@formEditUser')->name('formEditUser');

Route::post('store', 'HomeController@storeUser')->name('store');

Route::patch('edi/{user}', 'HomeController@edi')->name('edi');

Route::delete('destroy/{user}', 'HomeController@destroy')->name('destroy');
