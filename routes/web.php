<?php

use App\Http\Controllers\Client\BookingController;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;
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

Route::get('/', [BookingController::class, 'index'])->name('index');
Route::get('/packages', [BookingController::class, 'packageIndex'])->name('packageIndex');

Route::prefix('packages')->as('packages.')->group(function () {
    Route::get('index', [BookingController::class, 'packageIndex'])->name('index');
    Route::get('{package}/details', [BookingController::class, 'packageDetails'])->name('details');
    Route::post('book', [BookingController::class, 'bookPackage'])->name('book');
}); 

Route::prefix('activities')->as('activities.')->group(function () {
    Route::get('index', [BookingController::class, 'activityIndex'])->name('index');
    Route::get('{activity}/details', [BookingController::class, 'activityDetails'])->name('details');
    Route::post('book', [BookingController::class, 'bookActivity'])->name('book');
}); 

Route::prefix('article')->as('article.')->group(function () { 
    Route::get('{article}/details', [BookingController::class, 'articleDetails'])->name('details');
});

Route::get('/testmail', function(){
    return view('mail.test');
});

