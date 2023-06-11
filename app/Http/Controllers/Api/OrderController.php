<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\OrderResource;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Get the order
        $orders = Order::with('phone', 'user')->get();
        return OrderResource::collection($orders);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $orderId = Str::uuid();
        $order = new Order();
        $order->order_id=$orderId;
        $order->tax=$request->input('tax');
        $order->quantity=$request->input('quantity');
        $order->subtotal=$request->input('subtotal');
        $order->phone_id=$request->input('phone_id');
        $order->user_id=$request->input('user_id');

        $order->save();

        return new OrderResource($order);
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
