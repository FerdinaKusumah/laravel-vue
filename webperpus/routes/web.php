<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
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
// Route::get('login/dashboard', function () {
//     echo 'Hello World';
// });
Route::get('login', 'LoginController@view')->name('login');
// Route::post('login', 'LoginController@authenticate')->name('login.auth');
Route::post('login', 'LoginController@postLogin');
Route::get('logout', [App\Http\Controllers\LoginController::class, 'logout'])->name('logout')->middleware('auth');
