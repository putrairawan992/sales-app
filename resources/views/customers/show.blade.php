@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Customer Details</h1>
    <div class="card">
        <div class="card-header">
            {{ $customer->name }}
        </div>
        <div class="card-body">
            <p><strong>Address:</strong> {{ $customer->address }}</p>
            <p><strong>Phone:</strong> {{ $customer->phone }}</p>
            <a href="{{ route('customers.index') }}" class="btn btn-primary">Back to List</a>
        </div>
    </div>
</div>
@endsection
