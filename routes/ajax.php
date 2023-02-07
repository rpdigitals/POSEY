<?php
use App\Http\Controllers\AjaxController;

Route::match( [ 'get', 'post' ], '/check_email_register', [ AjaxController::class, 'check_email_register' ] );
Route::match( [ 'get', 'post' ], '/check_email_register_provider', [ AjaxController::class, 'check_email_register_provider' ] );
Route::match( [ 'get', 'post' ], '/check_identifiers', [ AjaxController::class, 'check_identifiers' ] );
Route::match( [ 'get', 'post' ], '/check_identifiers_provider', [ AjaxController::class, 'check_identifiers_provider' ] );

