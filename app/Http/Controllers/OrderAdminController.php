<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderAdminController extends Controller
{
    public function in_process()
    {
        if (Auth::user()->role->name === 'user') {
            return redirect()->route('product.index');
        }
        $orders = Order::query()
            ->where('is_sent', true)
            ->where('is_validated', false)
            ->get();
        return view('orderAdmin.in_process', compact('orders'));
    }

    public function end_process()
    {
        if (Auth::user()->role->name === 'user') {
            return redirect()->route('product.index');
        }
        $orders = Order::query()
            ->where('is_sent', true)
            ->where('is_validated', true)
            ->where('is_paid', false)
            ->get();
        return view('orderAdmin.end_process', compact('orders'));
    }
    public function validate(Order $order)
    {
        $order->is_validated = true;
        $order->save();
        return redirect()->route('orderAdmin.in_process');
    }
}
