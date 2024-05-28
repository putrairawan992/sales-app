<?php
// app/Http/Controllers/OrderItemController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderItem;
use App\Models\Order;
use App\Models\Item;

class OrderItemController extends Controller
{
    public function index(Order $order)
    {
        $orderItems = $order->orderItems()->with('item')->get();
        return view('order_items.index', compact('order', 'orderItems'));
    }

    public function create(Order $order)
    {
        $items = Item::all();
        return view('order_items.create', compact('order', 'items'));
    }

    public function store(Request $request, Order $order)
    {
        $request->validate([
            'item_id' => 'required|uuid',
            'qty' => 'required|numeric',
            'price' => 'required|numeric',
            'discount' => 'required|numeric',
            'total' => 'required|numeric',
            'note' => 'nullable|string|max:255',
        ]);

        $order->orderItems()->create($request->all());

        return redirect()->route('orders.show', $order);
    }

    public function edit(Order $order, OrderItem $orderItem)
    {
        $items = Item::all();
        return view('order_items.edit', compact('order', 'orderItem', 'items'));
    }

    public function update(Request $request, Order $order, OrderItem $orderItem)
    {
        $request->validate([
            'item_id' => 'required|uuid',
            'qty' => 'required|numeric',
            'price' => 'required|numeric',
            'discount' => 'required|numeric',
            'total' => 'required|numeric',
            'note' => 'nullable|string|max:255',
        ]);

        $orderItem->update($request->all());

        return redirect()->route('orders.show', $order);
    }

    public function destroy(Order $order, OrderItem $orderItem)
    {
        $orderItem->delete();
        return redirect()->route('orders.show', $order);
    }
}
