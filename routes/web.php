<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PortalController;

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
//     return view('login');
// });

Route::get('/', [AuthController::class, 'login'])->name('home');
Route::post('/login', [AuthController::class, 'loginPost'])->name('loginPost');
Route::get('/forgot-password', [AuthController::class, 'forgotPassword'])->name('forgot-password');
Route::post('/forgot-password', [AuthController::class, 'forgotPasswordPost'])->name('forgotPassword');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth.custom'])->group(function() {
    Route::prefix('portal')->group(function (){
        Route::get('/dashboard', [PortalController::class, 'dashboard'])->name('dashboard');
        Route::get('/profile', [PortalController::class, 'profile'])->name('profile');
    });
});