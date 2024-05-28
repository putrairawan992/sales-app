@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Item Details</h1>
    <div class="card">
        <div class="card-header">
            {{ $item->name }}
        </div>
        <div class="card-body">
            <p><strong>Price:</strong> {{ $item->price }}</p>
            <p><strong>Description:</strong> {{ $item->description }}</p>
            <a href="{{ route('items.index') }}" class="btn btn-primary">Back to List</a>
        </div>
    </div>
</div>
@endsection
