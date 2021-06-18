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

// Dashboard WeStory
Route::resource('WeStory', DashboardController::class);

// CRUD FITUR
Route::resource('Fitur', FiturController::class);
// CRUD INVITATION
Route::resource('Invitation', InvitationController::class);
// CRUD ORDER
Route::resource('Order', OrderController::class);
// CRUD PEMBELI
Route::resource('Pembeli', PembeliController::class);
// CRUD RECIPIENT
Route::resource('Recipient', RecipientController::class);
// TEMA
Route::get('Undangan/{id}', 'TemaController@silver')->name('undangan.silver');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
