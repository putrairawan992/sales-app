@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Items</h1>
    <a href="{{ route('items.create') }}" class="btn btn-primary mb-3">Add New Item</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($items as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->price }}</td>
                <td>{{ $item->description }}</td>
                <td>
                    <a href="{{ route('items.show', $item) }}" class="btn btn-info">View</a>
                    <a href="{{ route('items.edit', $item) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('items.destroy', $item) }}" method="POST" style="display:inline;">
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
