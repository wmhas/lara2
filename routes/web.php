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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/phone', function () {
    $user = factory(\App\User::class)->create();
    $phone = new \App\Phone();

    $phone->phone = '122-2888-222';
    $user->phone()->save($phone);

    echo 'done';
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('admin/usrs','Admin\UsersController',['except'=>['show', 'create','store']]);
