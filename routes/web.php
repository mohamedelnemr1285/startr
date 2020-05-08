<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|

----- composer require laravel/ui "^1.2"
----- php artisan ui vue --auth
----- npm install && npm run dev

| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Auth::routes(['verify' =>true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
