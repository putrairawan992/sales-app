@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add New Sales Transaction</h1>
    <form method="POST" action="{{ route('transactions.store') }}">
        @csrf
        <div class="mb-3">
            <label for="amount" class="form-label">Amount</label>
            <input type="text" class="form-control" id="amount" name="amount" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" id="description" name="description" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
