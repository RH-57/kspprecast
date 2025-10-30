<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MediaSocialController;
use App\Http\Controllers\Admin\ProductCategoryController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('web.home.index');
});

Route::get('/hubungi-kami', function () {
    return view('web.contact.index');
});
Route::get('/tentang-kami', function () {
    return view('web.about.index');
});
Route::get('/paket-wisata', function () {
    return view('web.tour-package.index');
});
Route::get('/paket-wisata/{slug}', function () {
    return view('web.tour-package.detail');
});
Route::get('/sewa-kendaraan', function () {
    return view('web.rent-car.index');
});


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.attempt');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

    Route::get('/settings/contacts', [ContactController::class, 'index'])->name('contacts.index');
    Route::post('/settings/contacts', [ContactController::class, 'store'])->name('contacts.store');

    Route::resource('/settings/mediasocial', MediaSocialController::class);
    Route::resource('/projects', ProjectController::class);
    Route::delete('/projects/images/{id}', [ProjectController::class, 'deleteImage'])->name('projects.images.delete');

    Route::resource('/products/categories', ProductCategoryController::class);

    Route::resource('/users', UserController::class);
});
