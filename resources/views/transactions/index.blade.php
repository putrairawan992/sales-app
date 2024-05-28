@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Sales Transactions</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>User</th>
                <th>Amount</th>
                <th>Description</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            @foreach($transactions as $transaction)
            <tr>
                <td>{{ $transaction->id }}</td>
                <td>{{ $transaction->user->name }}</td>
                <td>{{ $transaction->amount }}</td>
                <td>{{ $transaction->description }}</td>
                <td>{{ $transaction->created_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
