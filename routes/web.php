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
Route::resource('Digital-Invitation', DashboardController::class);

// CRUD FITUR
Route::resource('Fitur', FiturController::class);
// CRUD Paket
Route::resource('Paket', PaketController::class);
// CRUD INVITATION

Route::resource('Invitation', InvitationController::class);
// CRUD ORDER
Route::resource('Order', OrderController::class);
// CRUD PEMBELI
Route::resource('Pembeli', PembeliController::class);
// CRUD RECIPIENT
Route::resource('Recipient', RecipientController::class);
// CRUD TESTIMONI
Route::resource('Testimoni', TestimoniController::class);
// Undangan
Route::get('/KartuUndangan/{id}', 'UndanganController@undangan' )->name('undangan');
Route::get('/Undangan', 'UndanganController@index')->name('undangan.index');
Route::get('/Undangan/{id}', 'UndanganController@create')->name('undangan.create');
Route::post('/Undangan/store', 'UndanganController@store')->name('undangan.store');


// Route::get('Undangan/{id}', 'TemaController@silver')->name('undangan.silver');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
