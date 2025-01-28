<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserShopController;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/home', [UserShopController::class, 'index'])->name('home');
Route::get('/categories', [UserShopController::class, 'index'])->name('categories.index');
Route::get('/products', [ProductController::class, 'prod'])->name('products.index');

Route::get('/Home', function () {
    return view('Home');
})->middleware(['auth', 'verified'])->name('Home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
