@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Orders</h1>
    <a href="{{ route('orders.create') }}" class="btn btn-primary mb-3">Add New Order</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Code</th>
                <th>Date</th>
                <th>Customer</th>
                <th>Address</th>
                <th>Subtotal</th>
                <th>Discount</th>
                <th>Total</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->code }}</td>
                <td>{{ $order->date }}</td>
                <td>{{ $order->customer->name }}</td>
                <td>{{ $order->address }}</td>
                <td>{{ $order->subtotal }}</td>
                <td>{{ $order->discount }}</td>
                <td>{{ $order->total }}</td>
                <td>
                      <a href="{{ route('orders.items.index', $order) }}" class="btn btn-primary">Order Items</a>
                    <a href="{{ route('orders.show', $order) }}" class="btn btn-info">View</a>
                    <a href="{{ route('orders.edit', $order) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('orders.destroy', $order) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
