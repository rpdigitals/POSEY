<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\AddToWallet;
use App\Http\Controllers\PaymentController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the 'api' middleware group. Enjoy building your API!
|
*/
Route::match( [ 'get', 'post' ], 'http://localhost:8001/callback_payments', [ PaymentController::class, 'response_payment' ] );
Route::match( [ 'get', 'post' ], 'http://localhost:8001/callback_add_to_wallet', [ AddToWallet::class, 'response_add_to_wallet' ] );

