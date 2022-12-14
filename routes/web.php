<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\TwoFactorAuthenticationController;

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

Route::group(['middleware' => ['auth']], function(){

    Route::view('home', 'home')->middleware(['account-email-verified', 
                                                'last-session-login',
                                                'save-cookie-login']);

    Route::get('auth/user/two-factor-auth', [TwoFactorAuthenticationController::class, 'index'])->name('auth.two-factor-auth');
    
    Route::get('verificacion', function(){
        return "Por favor verifique su cuenta";
    });
    
    Route::get('sesiones', function(){
        return "Su sesión ha durado mas de un día";
    });
});


//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
