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

Route::view('home', 'home')->middleware(['auth','account-email-verified', 'last-session-login']);

Route::get('verificacion', function(){
    return "Por favor verifique su cuenta";
})->middleware('auth');

Route::get('sesiones', function(){
    return "Su sesión ha durado mas de un día";
})->middleware(['auth', 'account-email-verified']);