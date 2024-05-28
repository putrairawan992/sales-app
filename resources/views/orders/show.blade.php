@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Order Details</h1>
    <div class="card">
        <div class="card-header">
            Order #{{ $order->code }}
        </div>
        <div class="card-body">
            <p><strong>Date:</strong> {{ $order->date }}</p>
            <p><strong>Customer:</strong> {{ $order->customer->name }}</p>
            <p><strong>Address:</strong> {{ $order->address }}</p>
            <p><strong>Subtotal:</strong> {{ $order->subtotal }}</p>
            <p><strong>Discount:</strong> {{ $order->discount }}</p>
            <p><strong>Total:</strong> {{ $order->total }}</p>
            <a href="{{ route('orders.index') }}" class="btn btn-primary">Back to List</a>
        </div>
    </div>
</div>
@endsection
