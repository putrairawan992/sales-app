@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Item Details for Order #{{ $order->code }}</h1>
    <div class="card">
        <div class="card-header">
            Item: {{ $orderItem->item->name }}
        </div>
        <div class="card-body">
            <p><strong>Quantity:</strong> {{ $orderItem->qty }}</p>
            <p><strong>Price:</strong> {{ $orderItem->price }}</p>
            <p><strong>Discount:</strong> {{ $orderItem->discount }}</p>
            <p><strong>Total:</strong> {{ $orderItem->total }}</p>
            <p><strong>Note:</strong> {{ $orderItem->note }}</p>
            <a href="{{ route('orders.items.index', $order) }}" class="btn btn-primary">Back to Items</a>
        </div>
    </div>
</div>
@endsection
