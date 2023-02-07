<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\MailController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::group(['middleware'=>['auth','verified']],function () {
    Route::get('/final_inscription','App\Http\Controllers\DashboardController@final_inscription')->name('final_inscription');
    Route::get('/dashboard_user','App\Http\Controllers\DashboardController@dashboard_user')->name('dashboard_user');
});

Route::match(['get', 'post'], '/', [AccueilController::class,'posey']);
/*Route::match(['get', 'post'], '/', [AccueilController::class,'accueil']);
Route::match(['get', 'post'], '/about_us', [AccueilController::class,'about_us']);
Route::match(['get', 'post'], '/contact_us', [AccueilController::class,'contact_us']);
Route::match(['get', 'post'], '/search/{id}', [AccueilController::class,'search']);
Route::match(['get', 'post'], '/faq', [AccueilController::class,'faq']);
Route::match(['get', 'post'], '/terms_conditions', [AccueilController::class,'terms_conditions']);
Route::match(['get', 'post'], '/privacy', [AccueilController::class,'privacy']);
Route::match(['get', 'post'], '/details/{id}', [AccueilController::class,'details']);
Route::match(['get', 'post'], '/categories', [AccueilController::class,'categories']);
Route::match(['get', 'post'], '/filtre_recherche', [AccueilController::class,'filtre_recherche']);
Route::match(['get', 'post'], '/favoris', [AccueilController::class,'favoris']);
Route::match(['get', 'post'], '/dynamic_search', [AjaxController::class,'dynamic_search']);



Route::match(['get', 'post'], '/mailing', [MailController::class,'mail']);
Route::match(['get', 'post'], '/contact_us_mail', [MailController::class,'contact_us_mail']);
*/




require __DIR__.'/admin.php';
require __DIR__.'/payment.php';
require __DIR__.'/ajax.php';
require __DIR__.'/provider.php';
require __DIR__.'/user.php';
require __DIR__.'/auth.php';
