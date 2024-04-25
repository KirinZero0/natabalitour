<?php

use App\Http\Controllers\Admin\ActivityBookingController;
use App\Http\Controllers\Admin\ActivityController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\PackageBookingController;
use App\Http\Controllers\Admin\PackageController;
use Illuminate\Support\Facades\Route;

Route::get('test', function () {
    return view('admin.panel.activity.index');
});

Route::get('/', [AuthController::class, 'loginForm'])->name('loginForm');
Route::post('login', [AuthController::class, 'login'])->name('login');

Route::middleware('auth:admin')->group(function () {
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');


    Route::prefix('booking')->as('booking.')->group(function () {
        Route::prefix('package')->as('package.')->group(function () {
            Route::get('index', [PackageBookingController::class, 'index'])->name('index');
            Route::get('{booking}/edit', [PackageBookingController::class, 'edit'])->name('edit');
            Route::get('create', [PackageBookingController::class, 'create'])->name('create');
            Route::get('{booking}/delete', [PackageBookingController::class, 'delete'])->name('delete');
            Route::post('store', [PackageBookingController::class, 'store'])->name('store');
            Route::put('{booking}/update', [PackageBookingController::class, 'update'])->name('update');
            Route::get('{booking}/view-image', [PackageBookingController::class, 'viewImage'])->name('image');
            Route::get('{booking}/cancel', [PackageBookingController::class, 'cancel'])->name('cancel');
            Route::get('{booking}/approve', [PackageBookingController::class, 'approve'])->name('approve');
            Route::get('{booking}/reject', [PackageBookingController::class, 'reject'])->name('reject');
        });
        Route::prefix('activity')->as('activity.')->group(function () {
            Route::get('index', [ActivityBookingController::class, 'index'])->name('index');
            Route::get('{booking}/edit', [ActivityBookingController::class, 'edit'])->name('edit');
            Route::get('create', [ActivityBookingController::class, 'create'])->name('create');
            Route::get('{booking}/delete', [ActivityBookingController::class, 'delete'])->name('delete');
            Route::post('store', [ActivityBookingController::class, 'store'])->name('store');
            Route::put('{booking}/update', [ActivityBookingController::class, 'update'])->name('update');
            Route::get('{booking}/view-image', [ActivityBookingController::class, 'viewImage'])->name('image');
            Route::get('{booking}/cancel', [ActivityBookingController::class, 'cancel'])->name('cancel');
            Route::get('{booking}/approve', [ActivityBookingController::class, 'approve'])->name('approve');
            Route::get('{booking}/reject', [ActivityBookingController::class, 'reject'])->name('reject');
        });
    });
    Route::prefix('package')->as('package.')->group(function () {
        Route::get('index', [PackageController::class, 'index'])->name('index');
        Route::get('{package}/edit', [PackageController::class, 'edit'])->name('edit');
        Route::get('create', [PackageController::class, 'create'])->name('create');
        Route::get('{package}/delete', [PackageController::class, 'delete'])->name('delete');
        Route::post('store', [PackageController::class, 'store'])->name('store');
        Route::put('{package}/update', [PackageController::class, 'update'])->name('update');
    });
    Route::prefix('activity')->as('activity.')->group(function () {
        Route::get('index', [ActivityController::class, 'index'])->name('index');
        Route::get('{activity}/edit', [ActivityController::class, 'edit'])->name('edit');
        Route::get('create', [ActivityController::class, 'create'])->name('create');
        Route::get('{activity}/delete', [ActivityController::class, 'delete'])->name('delete');
        Route::post('store', [ActivityController::class, 'store'])->name('store');
        Route::put('{activity}/update', [ActivityController::class, 'update'])->name('update');
    });
    Route::prefix('article')->as('article.')->group(function () {
        Route::get('index', [ArticleController::class, 'index'])->name('index');
        Route::get('{article}/edit', [ArticleController::class, 'edit'])->name('edit');
        Route::get('create', [ArticleController::class, 'create'])->name('create');
        Route::get('{article}/delete', [ArticleController::class, 'delete'])->name('delete');
        Route::post('store', [ArticleController::class, 'store'])->name('store');
        Route::put('{article}/update', [ArticleController::class, 'update'])->name('update');
    });

    Route::prefix('user')->as('user.')->group(function () {
        Route::get('index', [AuthController::class, 'index'])->name('index');
        Route::get('{admin}/edit', [AuthController::class, 'edit'])->name('edit');
        Route::get('create', [AuthController::class, 'registerForm'])->name('create');
        Route::get('{admin}/delete', [AuthController::class, 'delete'])->name('delete');
        Route::post('store', [AuthController::class, 'register'])->name('store');
        Route::put('{admin}/update', [AuthController::class, 'update'])->name('update');
    }); 
});