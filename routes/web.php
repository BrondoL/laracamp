<?php

use App\Http\Controllers\UserController;
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
})->name("home");

Route::get('/checkout', function () {
    return view('checkout');
})->name("checkout");

Route::get('/success-checkout', function () {
    return view('success-checkout');
})->name("success-checkout");

Route::get('/dashboard', function () {
    return view('dashboard');
})->name("dashboard");

// socialite
Route::get('/sign-in-google', [UserController::class, 'google'])->name("user.login.google");
Route::get('/auth/google/callback', [UserController::class, 'handleProviderCallback'])->name("user.google.callback");

require __DIR__ . '/auth.php';
