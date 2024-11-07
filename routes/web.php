<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/order', function () {
        return view('order.index');
    })->name('order.index');

    Route::get('/user', function () {
        if (Auth::user()->role->name !== 'admin') {
            return redirect()->route('product.index');
        }
        return view('user.index');
    })->name('user.index');

    Route::get('/order-admin', function () {
        if (Auth::user()->role->name === 'user') {
            return redirect()->route('product.index');
        }
        return view('orderAdmin.index');
    })->name('orderAdmin.index');

    Route::resource('product', ProductController::class);
});

require __DIR__ . '/auth.php';