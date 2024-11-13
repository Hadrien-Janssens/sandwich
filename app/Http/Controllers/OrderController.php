<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    use AuthorizesRequests;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::orderBy('created_at', 'desc')->where("user_id", Auth::id())->get();
        return view('order.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $orderId)
    {
        $order = Order::with('ligneOrders.product')->findOrFail($orderId);

        $total = $order->ligneOrders->sum(function ($ligneOrder) {
            if ($ligneOrder->size === 'normal') {
                return $ligneOrder->product->price_normal * $ligneOrder->quantity;
            } else {
                return $ligneOrder->product->price_big * $ligneOrder->quantity;
            }
        });

        return view('order.show', compact('order', 'total'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        TODO: //delete order only if is already paid
        //
    }

    public function orderInProcess()
    {

        $order = Order::with('ligneOrders.product')->where('is_sent', false)->where('user_id', Auth::id())->first();

        // if havn't order in process, redirect to product.index
        if (!$order) {
            return view('order.show');
        }

        $total = $order->ligneOrders->sum(function ($ligneOrder) {
            if ($ligneOrder->size === 'normal') {
                return $ligneOrder->product->price_normal * $ligneOrder->quantity;
            } else {
                return $ligneOrder->product->price_big * $ligneOrder->quantity;
            }
        });

        return view('order.show', compact('order', 'total'));
    }

    public function sendOrder()
    {
        $order = Order::where('is_sent', false)->where('user_id', Auth::id())->first();
        $order->is_sent = true;
        $order->save();
        return redirect()->route('order.index');
    }
}
