@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Order Items for Order #{{ $order->code }}</h1>
    <a href="{{ route('orders.items.create', $order) }}" class="btn btn-primary mb-3">Add New Item</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Item</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Discount</th>
                <th>Total</th>
                <th>Note</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orderItems as $orderItem)
            <tr>
                <td>{{ $orderItem->id }}</td>
                <td>{{ $orderItem->item->name }}</td>
                <td>{{ $orderItem->qty }}</td>
                <td>{{ $orderItem->price }}</td>
                <td>{{ $orderItem->discount }}</td>
                <td>{{ $orderItem->total }}</td>
                <td>{{ $orderItem->note }}</td>
                <td>
                    <a href="{{ route('orders.items.edit', [$order, $orderItem]) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('orders.items.destroy', [$order, $orderItem]) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('orders.index') }}" class="btn btn-primary">Back to Orders</a>
</div>
@endsection
