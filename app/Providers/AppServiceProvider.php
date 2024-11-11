<?php

namespace App\Providers;

use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $Order_inProcess = Order::query()
            ->where('user_id', Auth::id())
            ->where('is_sent', false)
            ->first();
        View::share('Order_inProcess', $Order_inProcess);
    }
}
