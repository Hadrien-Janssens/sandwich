<?php

use App\Http\Controllers\InvitationController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/order-admin', function () {
        if (Auth::user()->role->name === 'user') {
            return redirect()->route('product.index');
        }
        return view('orderAdmin.index');
    })->name('orderAdmin.index');

    Route::resource('product', ProductController::class);
    Route::resource('user', UserController::class);
    Route::get('/order/orderInProcess', [OrderController::class, 'orderInProcess'])->name('order.orderInProcess');
    Route::resource('order', OrderController::class);
});


// Not protected by auth middleware
Route::get('registere/update/{user}', [UserController::class, 'update'])->name('updateRegistere');
Route::get('/user/edit/{token}', [UserController::class, 'edit'])->name('user.edit');

require __DIR__ . '/auth.php';
