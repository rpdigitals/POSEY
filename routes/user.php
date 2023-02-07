<?php

use App\Http\Controllers\UserAccountController;
use App\Http\Controllers\CommandeActionsController;
;


Route::middleware(['auth','role:user'])->group(function(){
    Route::match(['get', 'post'], '/user_formular', [UserAccountController::class,'user_formular']);
    Route::match(['get', 'post'], '/user_add', [UserAccountController::class,'user_add']);
    Route::match(['get', 'post'], '/user_dashboard', [UserAccountController::class,'user_dashboard']);
    Route::match(['get', 'post'], '/user_favourites', [UserAccountController::class,'user_favourites']);
    Route::match(['get', 'post'], '/user_settings', [UserAccountController::class,'user_settings']);
    Route::match(['get', 'post'], '/user_bookings_filter', [UserAccountController::class,'user_bookings_filter']);
    Route::match(['get', 'post'], '/user_wallet', [UserAccountController::class,'user_wallet']);
    Route::match(['get', 'post'], '/user_reviews', [UserAccountController::class,'user_reviews']);
    Route::match(['get', 'post'], '/user_payments', [UserAccountController::class,'user_payments']);
    Route::match(['get', 'post'], '/user_bookings', [UserAccountController::class,'user_bookings']);
    Route::match(['get', 'post'], '/user_chats', [UserAccountController::class,'user_chats']);
    Route::match(['get', 'post'], '/user_book_service_u', [UserAccountController::class,'user_book_service_u']);
    Route::match(['get', 'post'], '/user_book_service/{id}', [UserAccountController::class,'user_book_service']);
    Route::match(['get', 'post'], '/user_demand_service', [UserAccountController::class,'user_demand_service']);
    Route::match(['get', 'post'], '/user_service', [UserAccountController::class,'user_service']);
    Route::match(['get', 'post'], '/user_delete_favoris/{id})', [UserAccountController::class,'user_delete_favoris']);
    Route::match(['get', 'post'], '/user_clear_notifications/{id}', [UserAccountController::class,'user_clear_notifications']);
    Route::match(['get', 'post'], '/user_cancel_demanded_service/{id}', [UserAccountController::class,'user_cancel_demanded_service']);
    Route::match(['get', 'post'], '/user_see_available_offers/{id}', [UserAccountController::class,'user_see_available_offers']);

    
    Route::match(['post'], '/user_rate_service/{id}', [UserAccountController::class,'user_rate_service']);


    Route::match(['get', 'post'], '/annulation_commande/{id}', [CommandeActionsController::class,'annulation_commande']);
    });
?>