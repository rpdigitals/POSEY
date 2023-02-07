<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PaymentController;
use App\Http\Controllers\AddToWalletController;

Route::middleware(['auth','role:user'])->group(function(){
    
    Route::match(['get', 'post'], '/make_payment/{id}', [PaymentController::class,'make_payement']);
    Route::match(['get', 'post'], '/make_payment_by_wallet/{id}', [PaymentController::class,'make_payement_by_wallet']);
   


    });
Route::middleware(['auth'])->group(function(){
    Route::match(['get', 'post'], '/add_to_wallet', [AddToWalletController::class,'add_to_wallet']);
   


    });
?>
