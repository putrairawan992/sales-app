@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add New Order</h1>
    <form method="POST" action="{{ route('orders.store') }}">
        @csrf
        <div class="mb-3">
            <label for="code" class="form-label">Code</label>
            <input type="text" class="form-control" id="code" name="code" required>
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Date</label>
            <input type="date" class="form-control" id="date" name="date" required>
        </div>
        <div class="mb-3">
            <label for="customer_id" class="form-label">Customer</label>
            <select class="form-control" id="customer_id" name="customer_id" required>
                @foreach($customers as $customer)
                    <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" name="address" required>
        </div>
        <div class="mb-3">
            <label for="subtotal" class="form-label">Subtotal</label>
            <input type="number" step="0.01" class="form-control" id="subtotal" name="subtotal" required>
        </div>
        <div class="mb-3">
            <label for="discount" class="form-label">Discount</label>
            <input type="number" step="0.01" class="form-control" id="discount" name="discount" required>
        </div>
        <div class="mb-3">
            <label for="total" class="form-label">Total</label>
            <input type="number" step="0.01" class="form-control" id="total" name="total" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
