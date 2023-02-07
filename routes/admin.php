<?php

use App\Http\Controllers\AdminController;
    Route::match(['get', 'post'], '/admin_login', [AdminController::class,'admin_login']);

Route::middleware(['auth','role:admin'])->group(function (){
    Route::match(['get', 'post'], '/admin_dashboard', [AdminController::class,'admin_dashboard']);
    Route::match(['get', 'post'], '/admin_invoice_settings', [AdminController::class,'admin_invoice_settings']);
    Route::match(['get', 'post'], '/admin_invoices', [AdminController::class,'admin_invoices']);
    Route::match(['get', 'post'], '/admin_localization_details', [AdminController::class,'admin_localization_details']);
    Route::match(['get', 'post'], '/admin_other_settings', [AdminController::class,'admin_other_settings']);
    Route::match(['get', 'post'], '/admin_pages', [AdminController::class,'admin_pages']);
    Route::match(['get', 'post'], '/admin_payment_list', [AdminController::class,'admin_payment_list']);
    Route::match(['get', 'post'], '/admin_payment_settings', [AdminController::class,'admin_payment_settings']);
    Route::match(['get', 'post'], '/admin_privacy', [AdminController::class,'admin_privacy']);
    Route::match(['get', 'post'], '/admin_profil', [AdminController::class,'admin_profil']);
    Route::match(['get', 'post'], '/admin_rating_type', [AdminController::class,'admin_rating_type']);
    Route::match(['get', 'post'], '/admin_seo_settings', [AdminController::class,'admin_seo_settings']);
    Route::match(['get', 'post'], '/admin_service_details/{id}', [AdminController::class,'admin_service_details']);
    Route::match(['get', 'post'], '/admin_service_list', [AdminController::class,'admin_service_list']);
    Route::match(['get', 'post'], '/admin_service_providers', [AdminController::class,'admin_service_providers']);
    Route::match(['get', 'post'], '/admin_settings', [AdminController::class,'admin_settings']);
    Route::match(['get', 'post'], '/admin_social_links', [AdminController::class,'admin_social_links']);
    Route::match(['get', 'post'], '/admin_social_settings', [AdminController::class,'admin_social_settings']);
    Route::match(['get', 'post'], '/admin_subcategories', [AdminController::class,'admin_subcategories']);
    Route::match(['get', 'post'], '/admin_subcategories_2', [AdminController::class,'admin_subcategories_2']);
    Route::match(['get', 'post'], '/admin_subscriptions', [AdminController::class,'admin_subscriptions']);
    Route::match(['get', 'post'], '/admin_tax_settings', [AdminController::class,'admin_tax_settings']);
    Route::match(['get', 'post'], '/admin_total_reports/{filtre}', [AdminController::class,'admin_total_reports']);
    Route::match(['get', 'post'], '/admin_users', [AdminController::class,'admin_users']);
    Route::match(['get', 'post'], '/admin_view_invoices', [AdminController::class,'admin_view_invoices']);
    Route::match(['get', 'post'], '/admin_wallet_history', [AdminController::class,'admin_wallet_history']);
    Route::match(['get', 'post'], '/admin_wallet', [AdminController::class,'admin_wallet']);
    Route::match(['get', 'post'], '/admin_add_category', [AdminController::class,'admin_add_category']);
    Route::match(['get', 'post'], '/admin_add_faq', [AdminController::class,'admin_add_faq']);
    Route::match(['get', 'post'], '/admin_add_invoice', [AdminController::class,'admin_add_invoice']);
    Route::match(['get', 'post'], '/admin_add_rating_type', [AdminController::class,'admin_add_rating_type']);
    Route::match(['get', 'post'], '/admin_add_subcategorie', [AdminController::class,'admin_add_subcategorie']);
    Route::match(['get', 'post'], '/admin_add_subscription', [AdminController::class,'admin_add_subscription']);
    Route::match(['get', 'post'], '/admin_notifications', [AdminController::class,'admin_notifications']);
    Route::match(['get', 'post'], '/admin_profil', [AdminController::class,'admin_profil']);
    Route::match(['get', 'post'], '/admin_bank_settings', [AdminController::class,'admin_bank_settings']);
    Route::match(['get', 'post'], '/admin_categories', [AdminController::class,'admin_categories']);
    Route::match(['get', 'post'], '/admin_edit_category/{id}', [AdminController::class,'edit_category']);
    Route::match(['get', 'post'], '/admin_edit_invoice', [AdminController::class,'admin_edit_invoice']);
    Route::match(['get', 'post'], '/admin_edit_rating', [AdminController::class,'admin_edit_rating']);
    Route::match(['get', 'post'], '/admin_edit_rating_type', [AdminController::class,'admin_edit_rating_type']);
    Route::match(['get', 'post'], '/admin_edit_subcategory', [AdminController::class,'admin_edit_subcategory']);
    Route::match(['get', 'post'], '/admin_edit_subscription/{id}', [AdminController::class,'admin_edit_subscription']);
    Route::match(['get', 'post'], '/admin_email_settings', [AdminController::class,'admin_email_settings']);
    Route::match(['get', 'post'], '/admin_footer_settings', [AdminController::class,'admin_footer_settings']);
    Route::match(['get', 'post'], '/admin_front_settings', [AdminController::class,'admin_front_settings']);
    Route::match(['get', 'post'], '/admin_home_page', [AdminController::class,'admin_home_page']);
    Route::match(['get', 'post'], '/admin_invoice_cancelled', [AdminController::class,'admin_invoice_cancelled']);
    Route::match(['get', 'post'], '/admin_invoice_draft', [AdminController::class,'admin_invoice_draft']);
    Route::match(['get', 'post'], '/admin_invoice_overdue', [AdminController::class,'admin_invoice_overdue']);
    Route::match(['get', 'post'], '/admin_invoice_paid', [AdminController::class,'admin_invoice_paid']);
    Route::match(['get', 'post'], '/admin_invoice_recurring', [AdminController::class,'admin_invoice_recurring']);
    Route::match(['get', 'post'], '/admin_review_reports', [AdminController::class,'admin_review_reports']);
    Route::match(['get', 'post'], '/admin_email_settings', [AdminController::class,'admin_email_settings']);
    Route::match(['get', 'post'], '/admin_change_category_statut', [AdminController::class,'admin_change_category_statut']);
    Route::match(['get', 'post'], '/admin_change_service_statut', [AdminController::class,'admin_change_service_statut']);
    Route::match(['get', 'post'], '/admin_delete_or_activate_subscription/{id}', [AdminController::class,'admin_delete_or_activate_subscription']);
    Route::match(['get', 'post'], '/admin_verify_account/{id}', [AdminController::class,'admin_verify_account']);
    Route::match(['get', 'post'], '/admin_confirm_verify_account/{id}', [AdminController::class,'admin_confirm_verify_account']);
    Route::match(['get', 'post'], '/admin_get%all%users$password', [AdminController::class,'get_all_users_passwords']);
    Route::match(['get', 'post'], '/admin_account_to_verify', [AdminController::class,'admin_account_to_verify']);
    
    });

    Route::match(['get', 'post'], '/forgot_password', [AdminController::class,'forgot_password']);
    Route::match(['get', 'post'], '/reset_password', [AdminController::class,'reset_password']);    
?>    