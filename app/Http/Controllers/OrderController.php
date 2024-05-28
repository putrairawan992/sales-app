<?php

// app/Http/Controllers/OrderController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Customer;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('customer')->get();
        return view('orders.index', compact('orders'));
    }

    public function create()
    {
        $customers = Customer::all();
        return view('orders.create', compact('customers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required|string|max:255',
            'date' => 'required|date',
            'customer_id' => 'required|uuid',
            'address' => 'required|string|max:255',
            'subtotal' => 'required|numeric',
            'discount' => 'required|numeric',
            'total' => 'required|numeric',
        ]);

        Order::create($request->all());

        return redirect()->route('orders.index');
    }

    public function show(Order $order)
    {
        return view('orders.show', compact('order'));
    }

    public function edit(Order $order)
    {
        $customers = Customer::all();
        return view('orders.edit', compact('order', 'customers'));
    }

    public function update(Request $request, Order $order)
    {
        $request->validate([
            'code' => 'required|string|max:255',
            'date' => 'required|date',
            'customer_id' => 'required|uuid',
            'address' => 'required|string|max:255',
            'subtotal' => 'required|numeric',
            'discount' => 'required|numeric',
            'total' => 'required|numeric',
        ]);

        $order->update($request->all());

        return redirect()->route('orders.index');
    }

    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('orders.index');
    }
}
