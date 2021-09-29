<?php

use App\Http\Controllers\DTSController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
//     return view('pages.homepage');
// })->name('homepage');

Route::get('/', [DTSController::class, 'index'])->name('homepage');
Route::get('/hotel/{id}', [DTSController::class, 'show'])->name('show_hotels');

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('profile/{id}', [DTSController::class, 'profile'])->name('profile');
    Route::post('edit_profile/{id}', [DTSController::class, 'edit_profile'])->name('edit_profile');
    // Route User
    // Route::middleware(['user'])->group(function () {        
        Route::prefix('user')->group(function () {
            Route::get('booking_history/{id}', [DTSController::class, 'booking_history'])->name('booking_history');    
            Route::post('booking', [DTSController::class, 'booking'])->name('booking');
            Route::post('remove_booking/{id}', [DTSController::class, 'remove_booking'])->name('remove_booking');
            Route::post('bayar_kereta/{id}/{money}', [DTSController::class, 'bayar_kereta'])->name('bayar_kereta');
        });
    // });
    
    // Route Admin
    // Route::middleware(['admin'])->group(function () {        
        Route::prefix('adminpage')->group(function () {
            Route::get('/', [DTSController::class, 'admin_homepage'])->name('admin_homepage');
            // Route::get('add_hotel', [DTSController::class, 'add_hotel'])->name('add_hotel');    
            Route::get('show_hotel/{id}', [DTSController::class, 'show_hotel'])->name('show_hotel');
            Route::post('edit_hotel/{id}', [DTSController::class, 'edit_hotel'])->name('edit_hotel');
            Route::post('delete_hotel/{id}', [DTSController::class, 'delete_hotel'])->name('delete_hotel');
            Route::post('delete_user/{id}', [DTSController::class, 'delete_user'])->name('delete_user');
            Route::post('delete_testimonial/{id}', [DTSController::class, 'delete_testimonial'])->name('delete_testimonial');
            
            Route::get('print_report', [DTSController::class, 'print_report'])->name('print_report');

        });
    // });    
});
