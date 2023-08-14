<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\ProfileController;
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



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/dashboard', [ProfileController::class, 'orders'])->name('profile.orders');
    Route::get('/product/{id}/order', [MainController::class, 'showOrder'])->where('id', '[0-9]+')->name('showOrder');
    Route::post('/product/order', [MainController::class, 'storeOrder'])->name('storeOrder');
});

require __DIR__.'/auth.php';

Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('/product/{id}', [MainController::class, 'show'])->where('id', '[0-9]+')->name('product');
