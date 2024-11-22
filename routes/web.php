<?php

use App\Http\Controllers\InvitationController;
use App\Http\Controllers\OrderAdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderLigneController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;



// Not protected by auth middleware
Route::get('registere/update/{user}', [UserController::class, 'update'])->name('updateRegistere');
Route::get('/user/edit/{token}', [UserController::class, 'edit'])->name('user.edit');

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        $products = Product::all();
        $categories = Category::all();
        return view('product.index', compact(['products', 'categories']));
    });

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/order-admin-in-process', [OrderAdminController::class, 'in_process'])->name('orderAdmin.in_process');
    Route::get('/order-admin-end-process', [OrderAdminController::class, 'end_process'])->name('orderAdmin.end_process');
    Route::get('/order-admin-validate/{order}', [OrderAdminController::class, 'validate'])->name('orderAdmin.validate');

    Route::resource('product', ProductController::class);
    Route::resource('user', UserController::class);
    Route::get('/order/orderInProcess', [OrderController::class, 'orderInProcess'])->name('order.orderInProcess');
    Route::get('order/send', [OrderController::class, 'sendOrder'])->name('order.send');
    Route::resource('order', OrderController::class);
    Route::resource('orderLigne', OrderLigneController::class);
});




require __DIR__ . '/auth.php';
