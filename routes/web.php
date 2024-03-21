<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\ContactUsController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Front\HomeController as FrontHomeController;
use Illuminate\Support\Facades\Route;

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

Route::name('front.')->group(function () {
    Route::get('', [FrontHomeController::class, 'index'])->name('index');
});
Route::prefix('adminLogin')->name('adminLogin.')->group(function () {
    Route::match(['GET', 'POST'], '', [LoginController::class, 'login'])->name('login');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});
Route::prefix('admin')->name('admin.')->middleware(['auth', 'CheckAdmin'])->group(function () {
    Route::get('', [HomeController::class, 'home'])->name('home');
    Route::prefix('slider')->name('slider.')->group(function () {
        Route::get('', [SliderController::class, 'index'])->name('index');
        Route::match(['GET', 'POST'], 'add', [SliderController::class, 'add'])->name('add');
        Route::match(['GET', 'POST'], 'edit/{slider}', [SliderController::class, 'edit'])->name('edit');
        Route::get('del/{slider}', [SliderController::class, 'del'])->name('del');
        Route::get('show/{sliderId}', [SliderController::class, 'show'])->name('show');
    });
    Route::prefix('about')->name('about.')->group(function () {
        Route::get('', [AboutController::class, 'index'])->name('index');
        Route::match(['GET', 'POST'], 'add', [AboutController::class, 'add'])->name('add');
        Route::match(['GET', 'POST'], 'edit/{about}', [AboutController::class, 'edit'])->name('edit');
        Route::get('del/{about}', [AboutController::class, 'del'])->name('del');
        // Route::get('show/{aboutId}', [AboutController::class, 'show'])->name('show');
    });
    Route::prefix('service')->name('service.')->group(function () {
        Route::get('', [ServiceController::class, 'index'])->name('index');
        Route::match(['GET', 'POST'], 'add', [ServiceController::class, 'add'])->name('add');
        Route::match(['GET', 'POST'], 'edit/{service}', [ServiceController::class, 'edit'])->name('edit');
        Route::get('del/{service}', [ServiceController::class, 'del'])->name('del');
    });
    Route::prefix('contact')->name('contact.')->group(function () {
        Route::get('', [ContactUsController::class, 'index'])->name('index');
        Route::match(['GET', 'POST'], 'add', [ContactUsController::class, 'add'])->name('add');
        // Route::match(['GET', 'POST'], 'edit/{service}', [ServiceController::class, 'edit'])->name('edit');
        // Route::get('del/{service}', [ServiceController::class, 'del'])->name('del');
    });
});
