@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add New Item to Order #{{ $order->code }}</h1>
    <form method="POST" action="{{ route('orders.items.store', $order) }}">
        @csrf
        <div class="mb-3">
            <label for="item_id" class="form-label">Item</label>
            <select class="form-control" id="item_id" name="item_id" required>
                @foreach($items as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="qty" class="form-label">Quantity</label>
            <input type="number" step="0.01" class="form-control" id="qty" name="qty" required>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" step="0.01" class="form-control" id="price" name="price" required>
        </div>
        <div class="mb-3">
            <label for="discount" class="form-label">Discount</label>
            <input type="number" step="0.01" class="form-control" id="discount" name="discount" required>
        </div>
        <div class="mb-3">
            <label for="total" class="form-label">Total</label>
            <input type="number" step="0.01" class="form-control" id="total" name="total" required>
        </div>
        <div class="mb-3">
            <label for="note" class="form-label">Note</label>
            <input type="text" class="form-control" id="note" name="note">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <a href="{{ route('orders.items.index', $order) }}" class="btn btn-secondary">Back to Items</a>
</div>
@endsection
