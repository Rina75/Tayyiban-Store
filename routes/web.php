<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PaymentController;

Route::get('/', function () {
    return redirect()->route('login'); // Mengarahkan langsung ke halaman login
});

Route::middleware('auth')->group(function () {
    // Rute-rute yang memerlukan autentikasi
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/about', [AboutController::class, 'index'])->name('about');
    Route::get('/info', [InfoController::class, 'index'])->name('info');
    Route::get('/produk', [ProdukController::class, 'index'])->name('produk');
    Route::get('/contact', [ContactController::class, 'index'])->name('contact');
});


// Login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);



Route::resource('transactions', TransactionController::class);



Route::get('/payment/checkout', [PaymentController::class, 'showPaymentForm'])->name('payment.checkout');

// Payment Routes
Route::post('/produk/payment', [PaymentController::class, 'processPayment'])->name('payment.process');
Route::get('/produk/payment/success', [PaymentController::class, 'paymentSuccess'])->name('payment.success');
Route::get('/produk/payment/failure', [PaymentController::class, 'paymentFailure'])->name('payment.failure');
