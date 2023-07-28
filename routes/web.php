<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/about-us', 'aboutus')->name('aboutus');
    Route::get('/manufacturing', 'manufacturing')->name('manufacturing');
    Route::get('/product', 'product')->name('product');
    Route::get('/product/json', 'productJson')->name('productJson');
    Route::post('/product/foodmail', 'productFootmail')->name('product.foodmail');
    Route::post('/product/splytmail', 'productSplytmail')->name('product.splytmail');
    Route::prefix('/applications')->group(function(){
        Route::get('/aseptic-packaging', 'aseptic')->name('aseptic');
        Route::get('/paper-packaging', 'paper')->name('paper');
    });
    Route::prefix('/contact-us')->group(function(){
        Route::get('/', 'contact')->name('contact');
        Route::post('/store', 'contact_store')->name('contact.store');
    });
});
Route::prefix('/login')->group(function(){
    Route::get('/', [HomeController::class, 'login'])->name('login');
    Route::post('/process', [AuthController::class, 'login_process'])->name('login.process');
});
Route::get('/logout', [AuthController::class, 'logout_process'])->name('logout');
Route::middleware('loginauth')->group(function(){
    Route::controller(AdminController::class)->group(function(){
        Route::prefix('/account')->group(function(){
            Route::get('/', 'dashboard')->name('admin.dashboard');
        });
    });
});