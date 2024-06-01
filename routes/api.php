<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\Auth\SignUpController;
use App\Http\Controllers\Auth\SignInController;
use App\Http\Controllers\Users\UsersController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['middleware' => 'auth:api', 'prefix' => 'v1'], function() {
    /* Auth API */
    Route::post('change/password', [SignInController::class, 'changePassword'])->name('changePassword');
    Route::post('logout', [SignInController::class, 'logout'])->name('logout');
    
    /* User API */
    Route::get('get/authenticated-user', [UsersController::class, 'getAuthenticatedUser']);
    
    /* checkout API */
    Route::get('get/from-cart', [CheckoutController::class, 'getFromCart']);    
    Route::post('prepare/checkout', [CheckoutController::class, 'prepareCheckout']);
});

Route::group(['prefix' => 'v1'], function() {
    Route::post('sign-up/send-data', [SignUpController::class, 'signUp']);
    Route::post('sign-in', [SignInController::class, 'signIn']);
});
