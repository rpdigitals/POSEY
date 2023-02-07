<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProviderAccountController;
use App\Http\Controllers\CommandeActionsController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;

Route::middleware(['auth','role:provider'])->group(function(){

Route::match(['get', 'post'], '/provider_formular', [ProviderAccountController::class,'provider_formular']);
Route::match(['get', 'post'], '/provider_add', [ProviderAccountController::class,'provider_add']);
Route::match(['get', 'post'], '/provider_dashboard', [ProviderAccountController::class,'provider_dashboard']);
Route::match(['get', 'post'], '/provider_services', [ProviderAccountController::class,'provider_services']);
Route::match(['get', 'post'], '/provider_settings', [ProviderAccountController::class,'provider_settings']);
Route::match(['get', 'post'], '/provider_wallet', [ProviderAccountController::class,'provider_wallet']);
Route::match(['get', 'post'], '/provider_reviews', [ProviderAccountController::class,'provider_reviews']);
Route::match(['get', 'post'], '/provider_payments', [ProviderAccountController::class,'provider_payments']);
Route::match(['get', 'post'], '/provider_notifications', [ProviderAccountController::class,'provider_notifications']);
Route::match(['get', 'post'], '/provider_booking_list', [ProviderAccountController::class,'provider_booking_list']);
Route::match(['get', 'post'], '/provider_bookings_filter', [ProviderAccountController::class,'provider_bookings_filter']);
Route::match(['get', 'post'], '/provider_subscription', [ProviderAccountController::class,'provider_subscription']);
Route::match(['get', 'post'], '/provider_availability', [ProviderAccountController::class,'provider_availability']);
Route::match(['get', 'post'], '/provider_chats', [ProviderAccountController::class,'provider_chats']);
Route::match(['get', 'post'], '/provider_add_service', [ProviderAccountController::class,'provider_add_service']);
Route::match(['get', 'post'], '/provider_edit_service/{idS}', [ProviderAccountController::class,'provider_edit_service']);   
Route::match(['get', 'post'], '/provider_delete_service/{idS}', [ProviderAccountController::class,'provider_delete_service']); 
Route::match(['get', 'post'], '/update_subscription/{id}', [ProviderAccountController::class,'update_subscription']);
Route::match(['get', 'post'], '/provider_clear_notifications/{id}', [ProviderAccountController::class,'provider_clear_notifications']);
Route::match(['get', 'post'], '/provider_accept_demanded_service/{id}', [ProviderAccountController::class,'provider_accept_demanded_service']);
Route::match(['get', 'post'], '/provider_cancel_accept_demanded_service/{id}', [ProviderAccountController::class,'provider_cancel_accept_demanded_service']);
Route::match(['get', 'post'], '/demanded_services', [ProviderAccountController::class,'demanded_services']);
Route::match(['get', 'post'], '/achever_commande/{id}', [ProviderAccountController::class,'achever_commande']);
Route::match(['get', 'post'], '/provider_verify_account', [AdminController::class,'provider_verify_account']);

   

Route::match(['get', 'post'], '/accepter_commande/{id}', [CommandeActionsController::class,'accepter_commande']);
Route::match(['get', 'post'], '/rejeter_commande/{id}', [CommandeActionsController::class,'rejeter_commande']);

});





Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
                ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
                ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
                ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
                ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
                ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
                ->name('password.update');
});

Route::middleware('auth')->group(function () {
    Route::get('verify-email', [EmailVerificationPromptController::class, '__invoke'])
                ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
                ->middleware(['signed', 'throttle:6,1'])
                ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');

    
     Route::get('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
});

?>