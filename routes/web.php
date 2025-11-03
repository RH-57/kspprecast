<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MediaSocialController;
use App\Http\Controllers\Admin\ProductCategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\website\AboutController;
use App\Http\Controllers\website\ContactController as WebsiteContactController;
use App\Http\Controllers\website\HomeController;
use App\Http\Controllers\website\ProductController as WebsiteProductController;
use App\Http\Controllers\website\ProjectController as WebsiteProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('web-home');
Route::get('/contact-us', [WebsiteContactController::class, 'index'])->name('web-contact');
Route::get('/project', [WebsiteProjectController::class, 'index'])->name('web-project');
Route::get('/project/{slug}', [WebsiteProjectController::class, 'show'])->name('web-project-detail');
Route::get('/about-us', [AboutController::class, 'index'])->name('web-about');
Route::get('/products', [WebsiteProductController::class, 'index'])->name('web-product');
Route::get('/products/{slug}', [WebsiteProductController::class, 'show'])->name('web-product-detail');


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

    Route::resource('/products', ProductController::class);
    Route::delete('/products/images/{id}', [ProductController::class, 'deleteImage'])->name('products.images.delete');

    Route::resource('/users', UserController::class);
});
